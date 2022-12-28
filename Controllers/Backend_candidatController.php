<?php

namespace App\Controllers;

use App\Core\Util;
use Dompdf\dompdf;
use App\Models\JaimeModel;
use App\Models\OffreModel;
use App\Models\DomaineModel;
use App\Models\CandidatModel;
use App\Models\EmployeurModel;
use App\Models\FormationModel;
use App\Models\ExperienceModel;
use App\Models\RecompenseModel;

class Backend_candidatController extends Controller{

    public function index(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $offre = new OffreModel;
        $toutes_offres = $offre->findAll();
        $offre_par_page = 2;
        $offres_totales = count($toutes_offres);
        $recupere_tous_offres = $offre->recupere_tous_offres();

        $util = new Util();



       
        if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
           $tailleMax = 2097152;
           $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
           if($_FILES['avatar']['size'] <= $tailleMax) {
              $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
              if(in_array($extensionUpload, $extensionsValides)) {
                 $chemin = "../public_html/images/".$_SESSION["user"]["id"].".".$extensionUpload;
                 //var_dump($_FILES['avatar']['tmp_name']);
                 //die;
                 $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                 if($resultat) {
                    var_dump($resultat);
                    die;
                   // $updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
                   // $updateavatar->execute(array(
                      // 'avatar' => $_SESSION['id'].".".$extensionUpload,
                    //   'id' => $_SESSION['id']
                    //   ));
                   // header('Location: profil.php?id='.$_SESSION['id']);
                 } else {
                    $msg = "Erreur durant l'importation de votre photo de profil";
                 }
              } else {
                 $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
              }
           } else {
              $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
           }
        }
       

        return $this->render('candidat/index.php', compact('recupere_tous_offres', 'util'), 'home_backend_candidat.php');
    }


    public function page($id){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $get = explode("/",$_GET['p']);
        //var_dump($get);

        $offre = new OffreModel;
        $toutes_offres = $offre->findAll();
        $offre_par_page = 1;
        $offres_totales = count($toutes_offres);
        $page_totale = ceil($offres_totales / $offre_par_page);
        //var_dump($page_totale);
        $page_courante = $id;
        
        $depart = ($id - 1) * $offre_par_page;
        $recupere_tous_offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);



        $util = new Util();



       
        if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
           $tailleMax = 2097152;
           $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
           if($_FILES['avatar']['size'] <= $tailleMax) {
              $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
              if(in_array($extensionUpload, $extensionsValides)) {
                 $chemin = "../public_html/images/".$_SESSION["user"]["id"].".".$extensionUpload;
                 //var_dump($_FILES['avatar']['tmp_name']);
                 //die;
                 $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                 if($resultat) {
                    var_dump($resultat);
                    die;
                   // $updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
                   // $updateavatar->execute(array(
                      // 'avatar' => $_SESSION['id'].".".$extensionUpload,
                    //   'id' => $_SESSION['id']
                    //   ));
                   // header('Location: profil.php?id='.$_SESSION['id']);
                 } else {
                    $msg = "Erreur durant l'importation de votre photo de profil";
                 }
              } else {
                 $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
              }
           } else {
              $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
           }
        }
       

        return $this->render('candidat/page.php', compact('recupere_tous_offres', 'util', 'page_totale', 'page_courante'), 'home_backend_candidat.php');
    }

    public function imprimer(){

        //  ob_start();
        // require_once '../Views/candidat/backend-candidat-cv.php';
        // $html = ob_get_contents();
        
        // ob_get_clean();
        // //die($html);
        // require_once '../dompdf/autoload.inc.php';

        // $dompdf = new Dompdf();
        // $dompdf->loadHTML($html);
        // $dompdf->setPaper("A4");

        // $dompdf->render();
        // $dompdf->stream();

        $user = new CandidatModel;
        $users = $user->find($_SESSION["user"]["id"]);
        

        $findFormation = new FormationModel;
        $findFormation = $findFormation->findAll();

        $findExperience = new ExperienceModel;
        $findExperience = $findExperience->findAll();

        $findReccompense = new RecompenseModel;
        $findReccompense = $findReccompense->findAll();

        return $this->render('candidat/backend-candidat-cv.php', compact('findFormation', 'findExperience', 'findReccompense', 'users'), 'generatepdf.php');


    }


    public function profil(){



        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $domaine = new DomaineModel;
        $domaine = $domaine->findAll();

        $can = new CandidatModel;
            $can = $can->find($_SESSION['user']['id']);
          //  var_dump($can);

          $candidat = new CandidatModel;
        if(isset($_POST)){

            
           

            if(isset($_POST['updatecandidat'])){
                

            $nom = strip_tags($_POST['nom']);
         
            //$nomotdepassem = strip_tags($_POST['motdepasse']);
            $email = strip_tags($_POST['email']);
            $datenaissance = strip_tags($_POST['datenaissance']);
            $contact = strip_tags($_POST['contact']);
            $genre = strip_tags($_POST['genre']);
            $poste = strip_tags($_POST['poste']);
            $domaine = strip_tags($_POST['domaine']);
            $salaire = strip_tags($_POST['salaire']);
            $description = strip_tags($_POST['description']);
            $facebook = strip_tags($_POST['facebook']);
            $twitter = strip_tags($_POST['twitter']);
            $linkedin = strip_tags($_POST['linkedin']);
            
            
            $candidat->setId($_SESSION['user']['id'])
                            ->setNom($nom)
                            ->setEmail($email)
                            ->setDatenaissance($datenaissance)
                            ->setContact($contact)
                            ->setGenre($genre)
                            ->setPoste($poste)
                            ->setDomaine($domaine)
                            ->setDescription($description)
                            ->setFacebook($facebook)
                            ->setTwitter($twitter)
                            ->setLinkedin($linkedin)
                            ->setSalaire($salaire)
                          ;
            $candidat->update();

            }

            

        }

        
            

        return $this->render('candidat/back_office_candidat_profile.php', compact('candidat', 'can', 'domaine'), 'home_backend_candidat.php');

    }

    public function mon_cv(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $user = new CandidatModel;
        $users = $user->find($_SESSION["user"]["id"]);

        //var_dump($user);

        $findFormation = new FormationModel;
        $findFormation = $findFormation->findAll();

        $findExperience = new ExperienceModel;
        $findExperience = $findExperience->findAll();

        $findReccompense = new RecompenseModel;
        $findReccompense = $findReccompense->findAll();

        return $this->render('candidat/backend-candidat-cv.php', compact('findFormation', 'findExperience', 'findReccompense', 'users'), 'home_backend_candidat.php');

    }

    public function emplois_enregistres(){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }
    
        $jaime = new JaimeModel;
        $jaime = $jaime->findjaimechoix();
        $ar = JaimeModel::valueentre();

        $offre = new OffreModel;
        $findcompany = new EmployeurModel;
        //var_dump($findcompany->findBy());
        //die;


        return $this->render('candidat/backend-candidat-emplois-enregistres.php', compact('jaime', 'offre', 'findcompany'), 'home_backend_candidat.php');

    }

    public function modification_cv(){
        if(!$_SESSION["user"]["id"]){
            echo "nok";
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }
        
        if(isset($_POST)){
           
            if(isset($_POST['send6']))
            {
                echo "world";
            }
           
           if(isset($_POST['send'])){
                //echo "merci";

                $titre = strip_tags($_POST['titre']);
                $description = strip_tags($_POST['description']);
                $annee = strip_tags($_POST['annee']);
                $etablissement = strip_tags($_POST['etablissement']);

                 
                $formation = new FormationModel;
                $formation ->setTitre($titre)
                              ->setDescription($description)
                              ->setAnnee($annee)
                              ->setEtablissement($etablissement)
                              ->setId_candidat1($_SESSION["user"]["id"])

                              ;
                  
                $formation->createOne();  

               $_SESSION["message"] = "Vous avez saisi une formation";
               //$_SESSION["information"] = "Vous avez saisi une formation";
                header("Location: /backend_candidat/modification_cv");
                exit;

            
           }

           if(isset($_POST['send2'])){
            //echo "merci";

           
            $titre = strip_tags($_POST['titre']);
            $description = strip_tags($_POST['description']);
            $datedebut = strip_tags($_POST['datedebut']);
            $datefin = strip_tags($_POST['datefin']);
            $entreprise = strip_tags($_POST['entreprise']);

             
            $formation = new ExperienceModel;
            $formation ->setTitre($titre)
                          ->setDescription($description)
                          ->setDatefin($datefin)
                          ->setDatedebut($datedebut)
                          ->setEntreprise($entreprise)
                          ->setId_candidats($_SESSION["user"]["id"])

                          ;
              
                           $formation->createOne();         
          // var_dump($formation->createOne());
             }

             if(isset($_POST['send4'])){
                //echo "merci";
    
               
                $titre = strip_tags($_POST['titre']);
                $description = strip_tags($_POST['description']);
                $datedebut = strip_tags($_POST['datedebut']);
                $datefin = strip_tags($_POST['datefin']);
                $institution = strip_tags($_POST['institution']);

    
                 
                $recompense = new RecompenseModel;
                $recompense ->setTitre($titre)
                              ->setDescription($description)
                              ->setDatefin($datefin)
                              ->setDatedebut($datedebut)
                              ->setInstitution($institution)
                              ->setId_candidat($_SESSION["user"]["id"])
    
                              ;
                //   var_dump($recompense);
                //   die;

                               $recompense->createOne();    
                               
                               
               $_SESSION["message"] = "Vous avez saisi une recompense";
               //$_SESSION["information"] = "Vous avez saisi une formation";
                header("Location: /backend_candidat/modification_cv");
                exit;
              // var_dump($formation->createOne());
                 }

             if(isset($_POST['send1'])){
                $myid = $_POST['myid'];
              //die;
                //echo "merci";

                $titre = strip_tags($_POST['titre']);
                $description = strip_tags($_POST['description']);
                $annee = strip_tags($_POST['annee']);
                $etablissement = strip_tags($_POST['etablissement']);

                
                $formation = new FormationModel;
                $formation  ->setId($myid)
                            ->setTitre($titre)
                            ->setDescription($description)
                            ->setAnnee($annee)
                            ->setEtablissement($etablissement)
                            // ->setId_candidat1($_SESSION["user"]["id"])
                            ;
                  
                $formation->update();  

              $_SESSION["message"] = "Vous avez effectué une nouvelle modification";
              //$_SESSION["information"] = "Vous avez saisi une formation";
                header("Location: /backend_candidat/modification_cv");
                exit;


              }

         
            }
            if(isset($_POST['send3'])){

            $myid = $_POST['myidexp'];
                
            $titre = strip_tags($_POST['titre']);
            $description = strip_tags($_POST['description']);
            $datedebut = strip_tags($_POST['datedebut']);
            $datefin = strip_tags($_POST['datefin']);
            $entreprise = strip_tags($_POST['entreprise']);

             
            $experience = new ExperienceModel;
            $experience   ->setId($myid)
                          ->setTitre($titre)
                          ->setDescription($description)
                          ->setDatefin($datefin)
                          ->setDatedebut($datedebut)
                          ->setEntreprise($entreprise)
                          ->setId_candidats($_SESSION["user"]["id"])
                          ;
                         
              
                           $experience->update();
                
            }
      
        
       
       
        
       

         $findFormation = new FormationModel;
         $findFormation = $findFormation->findAll();

         $findExperience = new ExperienceModel;
         $findExperience = $findExperience->findAll();

         $findReccompense = new RecompenseModel;
         $findReccompense = $findReccompense->findAll();

        //  var_dump($findExperience);
        //  die;
       

        return $this->render('candidat/backend-candidat-modification-cv.php', compact('findFormation', 'findExperience', 'findReccompense'), 'home_backend_candidat.php');

    }

    public function modification($id){
        if(isset($_POST['send1'])){
            //echo "merci";

            $titre = strip_tags($_POST['titre']);
            $description = strip_tags($_POST['description']);
            $annee = strip_tags($_POST['annee']);
            $etablissement = strip_tags($_POST['etablissement']);

             
            $formation = new FormationModel;
            $formation  ->setId($id)
                        ->setTitre($titre)
                        ->setDescription($description)
                        ->setAnnee($annee)
                        ->setEtablissement($etablissement)
                        // ->setId_candidat1($_SESSION["user"]["id"])
                        ;
              
            $formation->update();  

           $_SESSION["message"] = "Vous avez saisi une formation";
           //$_SESSION["information"] = "Vous avez saisi une formation";
            header("Location: /backend_candidat/modification_cv");
            exit;

        
       }
    }

    public function supprimerformation($id){
        //echo "merci";
        
        $formation1 = new FormationModel;
        $formation1 = $formation1->delete($id);
        $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
        header("Location: /backend_candidat/modification_cv");
       
        return $this->render('candidat/backend-candidat-modification-cv.php', [], 'home_backend_candidat1.php');

    }

    public function supprimerexperience($id){
        //echo "merci";
        
        $experience = new ExperienceModel;
        $experience = $experience->delete($id);
        $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
        header("Location: /backend_candidat/modification_cv");
       
        return $this->render('candidat/backend-candidat-modification-cv.php', [], 'home_backend_candidat1.php');

    }

    public function supprimerrecompense($id){
        //echo "merci";
        
        $experience = new RecompenseModel;
        $experience = $experience->delete($id);
        $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
        header("Location: /backend_candidat/modification_cv");
       
        return $this->render('candidat/backend-candidat-modification-cv.php', [], 'home_backend_candidat1.php');

    }

    public function modification_pass(){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $candidat = new CandidatModel;
        $candidatpass = $candidat->find($_SESSION['user']['motdepasse']);

        $can = new CandidatModel;

        
        if(isset($_POST['send'])){

            if(!empty($_POST['password1']) && !empty($_POST['password2'])){

                $pass1 = $_POST['password1'];
                $pass2 = $_POST['password2'];
                $pass = $_POST['pass'];

                if($candidatpass != $pass){
                    $_SESSION["message"] = "Vous avez saisir un mot de passe incorrect!";
                    header("Location: /Backend_candidat/modification_pass");
                    exit;
                }

                //var_dump($pass1);
                //var_dump($pass2);
                if($pass1 == $pass2){

                    $can->setId($_SESSION['user']['id'])
                            ->setMotdepasse($pass1)
                            ;
                    $can->update();
                    $_SESSION["message"] = "Votre mot de passe a été modifié!";


                }else
                {
                    
                    $_SESSION["message"] = "Les mots de passe ne correspondent pas!";
                    //header("Location: /Backend_candidat/modification_pass");
                }
            }

        }

        return $this->render('candidat/backend-candidat-modification-pass.php', [], 'home_backend_candidat.php');

    }

    public function liste_emplois(){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }
        $info = new JaimeModel;
        $infojob = $info->findjaimechoix();

        //$jaime = new JaimeModel;
        //$jaime = $jaime->findjaimechoix();
      //  $ar = JaimeModel::valueentre();

        $offre = new OffreModel;
        $findcompany = new EmployeurModel;

        return $this->render('candidat/backend-liste-emplois.php', compact('infojob', 'offre', 'findcompany'), 'home_backend_candidat.php');

    }

    public function quitter(){

        unset($_SESSION['user']);
        header('Location: /login' );
    }
}

