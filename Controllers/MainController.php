<?php


namespace App\Controllers;
use DateTime;
use App\Core\Util;
use App\Models\Model;
use App\Models\JaimeModel;
use App\Models\OffreModel;
use App\Models\OffresModel;
use App\Models\DomaineModel;
use App\Models\CandidatModel;
use App\Models\EmployeurModel;
use App\Controllers\Controller;
use App\Models\TypeEmploiModel;

class MainController extends Controller
{
    
    public function index()
    {
        $i = 0;
        $emploiModel = new OffreModel();
        $emploiRecent = $emploiModel->findAll();

        $domaine = new DomaineModel;
        $domaine = $domaine->findAll();

        if(isset($_POST)){
            if(isset($_POST['send'])){
                
                $email = strip_tags($_POST['email']);
                $motdepasse = $_POST['motdepasse'];

                
           
                $candidatmodel = new CandidatModel;
                //var_dump($userModel);
                $emailExist = $candidatmodel->findOneByEmail($email);
                if($emailExist == false){
                    $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /main');
                    exit;
                }
               //$passwordExist = $userModel->findOneByPassword($password);
                //$passwordExist = $emailExist->findOneByLogin($login);
                //var_dump($passwordExist);
                $pass= $emailExist->motdepasse;
               // var_dump($pass);
                //die;
               //var_dump($passwordExist->password);
               //var_dump($password);
                //var_dump($passwordExist->getId());
                
               // var_dump($emailExist);
              //  var_dump($passwordExist);
               //die;
    
    
                if (!$emailExist) {
                    $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /users/login');
                    exit;
                }
    
                $user = $candidatmodel->hydrate($emailExist);
               // var_dump($user);
    
    
    
                if ($pass == $motdepasse) {
                    $user->setSession();
                    var_dump($user);
                    header('Location:  /backend_candidat');
                    exit;
                } else {
                    //var_dump($pass);
                    
                    $_SESSION['message'] = 'Le mot de passe est incorrect';
                    //header('Location: /');
                    //exit;
                }

            }
            
        }else{
            echo "NOK";
        }

        if(isset($_POST['sendemployeur'])){
            
            var_dump($_POST['email']);
            $email = strip_tags($_POST['email']);
            $motdepasse = $_POST['motdepasse'];

            $employeurModel = new EmployeurModel;
                //var_dump($userModel);
                $emailExist = $employeurModel->findOneByEmail($email);
                if($emailExist == false){
                       $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /main');
                    exit;
                }
               //$passwordExist = $userModel->findOneByPassword($password);
                //$passwordExist = $emailExist->findOneByLogin($login);
                //var_dump($passwordExist);
                $pass= $emailExist->motdepasse;
               // var_dump($pass);
                //die;
               //var_dump($passwordExist->password);
               //var_dump($password);
                //var_dump($passwordExist->getId());
                
               // var_dump($emailExist);
              //  var_dump($passwordExist);
               //die;
    
    
                if (!$emailExist) {
                    $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /');
                    exit;
                }
    
                $user = $employeurModel->hydrate($emailExist);
               // var_dump($user);
    
    
    
                if ($pass == $motdepasse) {
                    $user->setSession();
                    var_dump($user);
                    header('Location: /backend_employeur/');
                    exit;
                } else {
                    $_SESSION['message'] = 'Le mot de passe est incorrect';
                    header('Location: /');
                    exit;
                }
        }

      
        $this->render('main/index.php', compact('emploiRecent', 'domaine', 'emploiModel'));
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: /' );
    }

    public function jaime($id){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }
        $jaimeinit = new JaimeModel;
        $jaimevalue = $jaimeinit->findjaime($id, $_SESSION["user"]['id']);
        echo "merci";
        if($jaimevalue){
           
            $jaimeinit->delete($jaimevalue->id);
        }else{
            echo "merci";
            //$jaimeinit = $jaimeinit->find()
            //var_dump($jaime);
            //die;
            $newdate = new DateTime();
            $newdate = $newdate->format("Y-m-d H:i:s");
            $jaime = new JaimeModel;
            $jaime->setLikeoffre(1)
                  ->setDateheurejaime($newdate)
                  ->setId_candidat($_SESSION["user"]['id'])
                  ->setId_offre($id)
                  ;
                  var_dump($jaime);
                  $jaime->createOne();
                 
        }
      
        
    }




    

   public function fetch_data()
   {      
        if(isset($_POST['action'])){
            $emploiModel = new OffreModel();
            $emploiRecent = $emploiModel->findAll();

            $type_emploi = new TypeEmploiModel;
            $domaineModel = new DomaineModel;
            $util = new Util();

            if(!isset($_POST['domaine'])){
               // echo "ok";


            ?>               
                <?php foreach($emploiRecent  as $emploiRecentnew):?>
              
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
                                $new = $employeur->find($emploiRecentnew->id_employeur);
                               // $jaime = $jaime->findjaimeAll($emploiRecentnew->id, $_SESSION["user"]["id"]);


                              ?>
                                
                                <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                <a class="job-list-company-name" href="#">Compagnie</a>
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
                                                $jaime = new JaimeModel;
    
                                                $new = $employeur->find($emploiRecentnew->id_employeur);
                                                //$jaime = $jaime->findjaimeAll($emploiRecentnew->id, $_SESSION["user"]["id"]);
    
    
                                            ?>
                                                
                                                <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                                <a class="job-list-company-name" href="#">Compagnie</a>
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

        $offremodel = new OffreModel;
        $offre = $offremodel->find_offre_by_id_offre($id);
        //var_dump($offre);

        $this->render('main/offres.php', compact('offre'), "home_second.php");
    }





}
