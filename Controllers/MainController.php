<?php


namespace App\Controllers;
use DateTime;
use App\Core\Util;
use App\Models\Model;
use App\Models\OffreModel;
use App\Models\OffresModel;
use App\Models\DomaineModel;
use App\Models\CandidatModel;
use App\Models\EmployeurModel;
use App\Models\PubliciteModel;
use App\Controllers\Controller;
use App\Models\TypeEmploiModel;
use App\Models\Aimer_Candidat_Offre_Model;
use App\Models\Postuler_Candidat_Offre_Model;
use App\Models\Formation_Cours_Model;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class MainController extends Controller
{
    
    public function index()
    {
        $i = 0;
        $emploiModel = new OffreModel();
        $emploiRecent = $emploiModel->findAllEtat();

        $domaine = new DomaineModel;
        $domaine = $domaine->findAll();


        if(isset($_POST['connexion_candidat'])){
            //die('hello');
            $email = strip_tags($_POST['email']);
            $motdepasse = $_POST['motdepasse'];
        
            $candidatmodel = new CandidatModel;
            //var_dump($userModel);
            $emailExist = $candidatmodel->findOneByEmail($email);
            // var_dump($emailExist);
            // die;
            if(!$emailExist){
                $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                header('Location: /main');
                exit;
            }

            $pass = $emailExist->motdepasse;
            

            if(password_verify($motdepasse, $pass)){
            

                $_SESSION['user'] = [
                    'id' => $emailExist->id,
                    'nom' => $emailExist->nom,
                    'email' => $emailExist->email,
                ];

                $_SESSION['message'] = "Vous êtes connectés";
                header("Location: /Backend_candidat");
                exit;


            }else{
                $_SESSION['message'] = "Adresse mail ou mot de passe incorrect ";
                header("Location: /main");
                exit;
            }



        }

        if(isset($_POST['connexion_employeur'])){
                
            $email = strip_tags($_POST['email']);
            $motdepasse = $_POST['motdepasse'];
       
            $employeurmodel = new EmployeurModel;
            //var_dump($userModel);
            $emailExist = $employeurmodel->findOneByEmail($email);
            // var_dump($emailExist);
            // die;
            if(!$emailExist){
                $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                header('Location: /main');
                exit;
            }

            $pass = $emailExist->motdepasse;
            

            if(password_verify($motdepasse, $pass)){
            

                $_SESSION['useremployeur'] = [
                    'id' => $emailExist->id,
                    'nom' => $emailExist->nom,
                    'email' => $emailExist->email,
                ];

                $_SESSION['message'] = "Vous êtes connectés";
                header("Location: /Backend_employeur");
                exit;


            }else{
                $_SESSION['message'] = "Adresse mail ou mot de passe incorrect ";
                header("Location: /main");
                exit;
            }

            //$user = $candidatmodel->hydrate($emailExist);
           // var_dump($user);



            // if ($pass == $motdepasse) {
            //     $user->setSession();
            //     var_dump($user);
            //     header('Location:  /backend_candidat');
            //     exit;
            // } else {
            //     //var_dump($pass);
                
            //     $_SESSION['message'] = 'Le mot de passe est incorrect';
            //     //header('Location: /');
            //     //exit;
            // }

        }

        $publicitemodel = new PubliciteModel();
        $publicites = $publicitemodel->findAll();

        $offres = $emploiModel->findAll();

        
        $this->render('main/index.php', compact('emploiRecent', 'domaine', 'emploiModel', 'publicites', 'offres'));
    }

    public function creer_un_compte(){
        //echo "hello world";

        if(isset($_POST['soumette_candidature'])){
                        
            $candidatmodel = new CandidatModel;

            $email = htmlspecialchars($_POST['email']);
            $nom = htmlspecialchars($_POST['nom']);
            $datenaissance = htmlspecialchars($_POST['datenaissance']);
            $contact = htmlspecialchars($_POST['contact']);
            $poste = htmlspecialchars($_POST['poste']);
            $domaine = htmlspecialchars($_POST['domaine']);
            $salaire = htmlspecialchars($_POST['salaire']);
            $genre = htmlspecialchars($_POST['genre']);
            $description = htmlspecialchars($_POST['description']);


            $namepdf = new DateTime();
            $firstpdf = $namepdf->getTimestamp();

            //create file's name
            Util::uploader_cv($firstpdf);

            $cv = $firstpdf.'.pdf';

            //var_dump($email);
            $candidatexist = $candidatmodel->findOneByEmail($email);

            if($candidatexist){
                $_SESSION['message'] = "Le compte existe déjà";
                header("Location: /main/creer_un_compte");
                exit;
            }

            function randomPasswordcreate() {
                $alphabet = "abcdefghijklmnopqrstuwxyz123456789";
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 4; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass); //turn the array into a string
            }
    
            $createdefaultpass = randomPasswordcreate();
            //var_dump($createdefaultpass);

            $pass  = password_hash($createdefaultpass, PASSWORD_DEFAULT);

            $candidatmodel
                            ->setNom($nom)
                            ->setEmail($email)
                            ->setMotdepasse($pass)
                            ->setDatenaissance($datenaissance)
                            ->setContact($contact)
                            ->setGenre($genre)
                            ->setPoste($poste)
                            ->setDomaine($domaine)
                            ->setDescription($description)
                            ->setSalaire($salaire)
                            ->setCv($cv)
                          ;
            $candidatmodel->createOne();

            $mail = new PHPMailer(true);
            try {
                //Server settings
               // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.hostinger.com';                    //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'lamutuelle@mudesgo.com';                     //SMTP username
                $mail->Password   = '@dmin/MUDESGO-2023#';                               //SMTP password
               $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
               // $mail->SMTPDebug = 3;
                //Recipients
                $mail->setFrom('lamutuelle@mudesgo.com');
                $mail->addAddress($email, '');
                $mail->CharSet = "utf-8";// set charset to utf8

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject =  "Mise à jour de votre compte";
                $mail->Body    = '
                Bonjour '.$nom.',<br/>
                Vous période de validation de votre compte vient d\'être modifiée.
                <br/>
                <br/>
                <br/>
                Passez cette date votre compte risque d\'être inactif, <br/>
                veuillez s\'il vous plaît prendre les dispositions pour vous acquitter regulièrement de votre cotisation mensuelle.
                <br/>

                
                ';
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
               // echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Une erreur s'est produite lors de l\'envoie de mail de notification: {$mail->ErrorInfo}";
            }


        }

        if(isset($_POST['soumette_employeur'])){
                       
            $employeurmodel = new EmployeurModel;

            $email = htmlspecialchars($_POST['email']);
            $nom = htmlspecialchars($_POST['nom']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $entreprise = htmlspecialchars($_POST['entreprise']);
            $secteur = htmlspecialchars($_POST['secteur']);
            $siege = htmlspecialchars($_POST['siege']);
            $description = htmlspecialchars($_POST['description']);

            //var_dump($email);
            $employeurexist = $employeurmodel->findOneByEmail($email);

            if($employeurexist){
                $_SESSION['message'] = "Le compte existe déjà";
                header("Location: /main/creer_un_compte");
                exit;
            }

            function randomPasswordcreate() {
                $alphabet = "abcdefghijklmnopqrstuwxyz123456789";
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 4; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass); //turn the array into a string
            }
    
            $createdefaultpass = randomPasswordcreate();
            //var_dump($createdefaultpass);

            $pass  = password_hash($createdefaultpass, PASSWORD_DEFAULT);

            $employeurmodel
                            ->setNom($nom)
                            ->setEmail($email)
                            ->setMotdepasse($pass)
                            ->setEntreprise($entreprise)
                            ->setTelephone($telephone)
                            ->setSecteur($secteur)
                            ->setDescription($description)
                            ->setSiege($siege)
                          ;
            $employeurmodel->createOne();

            $mail = new PHPMailer(true);

            try {
                //Server settings
               // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                // $mail->Host       = 'smtp.office365.com';                    //Set the SMTP server to send through
                // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                // $mail->Username   = 'dsi-appli@artci.ci';                     //SMTP username
                // $mail->Password   = 'SABD/2022#';                               //SMTP password
                // $mail->SMTPSecure = 'STARTTLS';            //Enable implicit TLS encryption
                ////
                $mail->Host       = 'smtp.hostinger.com';                    //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'lamutuelle@mudesgo.com';                     //SMTP username
                $mail->Password   = '@dmin/MUDESGO-2023#'; 
                $mail->SMTPSecure = 'tls';  
                ////
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
               // $mail->SMTPDebug = 3;
                //Recipients
                $mail->setFrom('lamutuelle@mudesgo.com');
                $mail->addAddress($email, 'You karlo');
                $mail->CharSet = "utf-8";// set charset to utf8

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject =  "Votre mot de passe par defaut";
                $mail->Body    = '
                Bonjour '.$nom.',<br/>
                Vous venez de vous inscrire sur la plateforme web de la PLANRH,
                Veuillez recevoir vos accès de connexion:
                <br/>
                <br/>

                Login: '.$email.'<br/>
                Mot de passe: <b>'.$createdefaultpass.'</b><br/>
                <br/>
                PLANRH vous remercie de votre attachement à notre plateforme .
                <br/>
                Revenir au site: <a href="www.planrh.com/main/login">www.planrh.com</a>
                ';
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                $_SESSION['message'] = "Votre compte a été crée.<br/>
                Votre mot de passe : $createdefaultpass <br/>
                Merci de vous rendre également sur votre boîte mail pour récupérer le mot de passe.";
                
                header("Location: /main");
                exit;
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }






        }

        
        $domainemodel = new DomaineModel;
        $domaines = $domainemodel->findAll();
        $this->render('main/creer_un_compte.php', compact('domaines'), 'home_second.php');

    }

    public function logout()
    {
        if($_SESSION['user']){
            unset($_SESSION['user']);
        }
        if($_SESSION['useremployeur']){
            unset($_SESSION['useremployeur']);
        }

        header('Location: /' );
    }

    public function fetch_data(){      
        if(isset($_POST['action'])){
            $emploiModel = new OffreModel();
            $emploiRecent = $emploiModel->findAllEtat();

            $type_emploi = new TypeEmploiModel;
            $domaineModel = new DomaineModel;
            $util = new Util();

            if(!isset($_POST['domaine'])){
               // echo "ok";


            ?>               
                <?php foreach($emploiRecent  as $emploiRecentnew):?>
              
                    <?php
                        $employeur = new EmployeurModel;
                        $new = $employeur->find($emploiRecentnew->id_employeur);


                    ?>
                  <div class="col-lg-6 col-sm-6">
                    <div class="job-list job-grid">
                      <div class="job-list-logo ">
                        <img class="img-fluid" src="images/<?= $new->image ?>" alt="">
                      </div>
                      <div class="job-list-details">
                        <div class="job-list-info">
                          <div class="job-list-title">
                            <h6><a href="#"><?=$emploiRecentnew->titre?></a></h6>
                          </div>
                          <div class="job-list-option">
                            <ul class="list-unstyled">
                              <li>
                              
                                
                                <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                <a class="job-list-company-name" href="#">Compagnie</a>
                              </li>
                              <li><i class="fas fa-map-marker-alt pe-1"></i><?=$emploiRecentnew->adresse ?></li>
                              <li><i class="fas fa-filter pe-1"></i>
                              <?php

                                $date = $util->mydateago("$emploiRecentnew->date_creation");
                              
                              $arr = $type_emploi->type_emploi($emploiRecentnew->typeemploi);
                              echo $arr->nom;

                              ?>
                              </li>
                              <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>
                                <?php
                                    $domaine = $domaineModel->domaine_employeur($emploiRecentnew->domaine); 
                                    echo $domaine->nom
                                
                                ?>
                              </a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                        <div class="job-list-favourite-time" > 
                        <a class="job-list-favourite order-2 " href="/main/offre/<?= $emploiRecentnew->id ?>" > <span style="font-size: 12px">Postuler </span></a>
                        <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>Durée : <?= $date;?></span>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
  
            <?php      

            }else{
                ?>
                    <!-- <p>Aucune offre correspondant à ce domaine</p> -->
                <?php
                $docheck = $emploiModel->getAlldataFilter($_POST['domaine']);

                ?>
                <div class="row mt-4"> 

                            <?php $docheck = $emploiModel->getAlldataFilter($_POST['domaine']); ?>
 
                            <?php foreach($docheck  as $emploiRecentnew):?>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                    <div class="job-list-logo ">
                                        <img class="img-fluid" src="images/svg/13.svg" alt="">
                                    </div>
                                    <div class="job-list-details">
                                        <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h6><a href="#"><?=$emploiRecentnew->titre?></a></h6>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                            <li>
                                            <?php
                                                $employeur = new EmployeurModel;
                                               // $jaime = new JaimeModel;
    
                                                $new = $employeur->find($emploiRecentnew->id_employeur);
                                                //$jaime = $jaime->findjaimeAll($emploiRecentnew->id, $_SESSION["user"]["id"]);
    
    
                                            ?>
                                                
                                                <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                                <a class="job-list-company-name" href="#"></a>
                                            </li>
                                            <li><i class="fas fa-map-marker-alt pe-1"></i><?=$emploiRecentnew->adresse ?></li>
                                            <li><i class="fas fa-filter pe-1"></i><?php
                                                //$date = new DateTime;
                                                //var_dump(mydateago("2013-05-01 00:22:35"));
                                                $date = $util->mydateago("$emploiRecentnew->date_creation");
                                            
                                                $arr = $type_emploi->type_emploi($emploiRecentnew->typeemploi);
                                                echo $arr->nom;
                                            ?></li>
                                            <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>
                                            <?php
                                                $domaine = $domaineModel->domaine_employeur($emploiRecentnew->domaine); 
                                                echo $domaine->nom
                                            
                                            ?>
                                            </a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="job-list-favourite-time" > 
                                        <a class="job-list-favourite order-2" href="/main/offre/<?= $emploiRecentnew->id ?>" > <span style="font-size: 12px">Postuler : </span></a>
                                        <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>Durée : <?= $date;?></span>
                                    </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                  </div>
  
  
  
          <?php
                
            }

            
       

        }else{

            header('Location: /main');
        }


    }
   

    public function offre($id){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter à un compte candidat!";
            header("Location: /");
            exit;
        }
        $offremodel = new OffreModel;
        $offre = $offremodel->find_offre_by_id_offre($id);

        $aime_offre = new Aimer_Candidat_Offre_Model;
        $aime_offres = $aime_offre->tous_les_offres_by_id($id);

        $offre_by_id = $aime_offre->like_by_offre_candidat($id, $_SESSION['user']['id']);
        $id = $id;

        $postuler_offre = new Postuler_Candidat_Offre_Model;
        $postuler_by_id = $postuler_offre->postuler_by_offre_candidat($id, $_SESSION['user']['id']);


        $this->render('main/offres.php', compact('offre', 'aime_offres', 'offre_by_id', 'id', 'postuler_by_id'), "home_second.php");
    }




    public function supprimer_like(){

        if($_POST){

            //die('okay');
            $aime_offre = new Aimer_Candidat_Offre_Model;
            $suppimer = $aime_offre->delete_aime($_POST['id_offre'], $_SESSION['user']['id']);

            $data = array("valeur"=> 0);
            //var_dump($data);
            //if($suppimer) {return true;}
            echo json_encode($data);

        }

    }

    public function ajouter_like(){

        if($_POST){

            //die('okay');
            $aime_offre = new Aimer_Candidat_Offre_Model;

            $aime_offre
                  ->setId_candidat($_SESSION["user"]['id'])
                  ->setId_offre($_POST['id_offre'])
                  ;
                  //var_dump($aime_offre);die;
                  $aime_offre->createOne();

            $data = array("valeur"=> 1);
            //var_dump($data);
            //if($suppimer) {return true;}
            echo json_encode($data);
        }

    }


    public function postuler_offre(){

        if($_POST){

            //die('okay');
            $postuler_offre = new Postuler_Candidat_Offre_Model;

            $candidatmodel = new CandidatModel();
            $candidat = $candidatmodel->find($_SESSION["user"]['id']);

            $postuler_offre
                  ->setId_candidat($_SESSION["user"]['id'])
                  ->setId_offre($_POST['id_offre'])
                  ;
                  //var_dump($aime_offre);die;
                  $postuler_offre->createOne();
            
                  $mail = new PHPMailer(true);

                  try {
                      //Server settings
                     // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                      $mail->isSMTP();                                            //Send using SMTP
                      // $mail->Host       = 'smtp.office365.com';                    //Set the SMTP server to send through
                      // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                      // $mail->Username   = 'dsi-appli@artci.ci';                     //SMTP username
                      // $mail->Password   = 'SABD/2022#';                               //SMTP password
                      // $mail->SMTPSecure = 'STARTTLS';            //Enable implicit TLS encryption
                      ////
                      $mail->Host       = 'smtp.hostinger.com';                    //Set the SMTP server to send through
                      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                      $mail->Username   = 'lamutuelle@mudesgo.com';                     //SMTP username
                      $mail->Password   = '@dmin/MUDESGO-2023#'; 
                      $mail->SMTPSecure = 'tls';  
                      ////
                      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                     // $mail->SMTPDebug = 3;
                      //Recipients
                      $mail->setFrom('lamutuelle@mudesgo.com');
                      $mail->addAddress($candidat->email, 'You karlo');
                      $mail->CharSet = "utf-8";// set charset to utf8
      
                      //Content
                      $mail->isHTML(true);                                  //Set email format to HTML
                      $mail->Subject =  "Postulat pour une offre sur PlanRH";
                      $mail->Body    = '
                      Bonjour '.$candidat->nom.',<br/>
                      Vous venez de postuler à une offre d\'emploi
                      <br/>
                      <br/>
      
                      
                      <br/>
                      PLANRH vous remercie de votre attachement à notre plateforme .
                      <br/>
                      Revenir au site: <a href="www.planrh.com/main/login">www.planrh.com</a>
                      ';
                      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                  
                      $mail->send();
                     
                  } catch (Exception $e) {
                      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                  }
      
                  $_SESSION['message'] = "Adresse mail ou mot de passe incorrect ";
                  header("Location: /main/");
                  exit;

            $data = array("valeur"=> 1);
            //var_dump($data);
            //if($suppimer) {return true;}
            //echo json_encode($data);
        }

    }

    public function renoncer_offre(){

        if($_POST){

            //die('okay');
            $aime_offre = new Postuler_Candidat_Offre_Model;
            $suppimer = $aime_offre->delete_postuler($_POST['id_offre'], $_SESSION['user']['id']);

            //$data = array("valeur"=> 0);
            //var_dump($data);
            //if($suppimer) {return true;}
            //echo json_encode($data);

        }

    }
}
