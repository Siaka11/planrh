<?php

namespace App\Controllers;

use App\Models\CandidatModel;
use App\Models\Domaine;
use App\Models\JaimeModel;
use App\Models\FormationModel;
use App\Models\ExperienceModel;
use Dompdf\dompdf;

class Backend_candidatController extends Controller{

    public function index(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

      

        return $this->render('candidat/index.php', [], 'home_backend_candidat.php');
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
        return $this->render('candidat/backend-candidat-cv.php', [], 'generatepdf.php');


    }


    public function profil(){



        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $domaine = new Domaine;
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

        return $this->render('candidat/backend-candidat-cv.php', [], 'home_backend_candidat.php');

    }

    public function emplois_enregistres(){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }
    
        $jaime = new JaimeModel;
        $jaime = $jaime->findjaimechoix();

      
       
        

        return $this->render('candidat/backend-candidat-emplois-enregistres.php', compact('jaime'), 'home_backend_candidat.php');

    }

    public function modification_cv(){
        if(!$_SESSION["user"]["id"]){
            echo "nok";
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }
        
        if(isset($_POST)){
           
           
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

           if(isset($_POST['send0'])){
            //echo "merci";

           
            $titre = strip_tags($_POST['titre']);
            $description = strip_tags($_POST['description']);
            $datedebut = strip_tags($_POST['datedebut']);
            $datefin = strip_tags($_POST['datefin']);
            //$etablissement = strip_tags($_POST['etablissement']);

             
            $formation = new ExperienceModel;
            $formation ->setTitre($titre)
                          ->setDescription($description)
                          ->setDatefin($datefin)
                          ->setDatedebut($datedebut)
                         // ->setEtablissement($etablissement)
                          ->setId_candidats($_SESSION["user"]["id"])

                          ;
              
                           $formation->createOne();         
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
            if(isset($_POST['send2'])){

                
            $titre = strip_tags($_POST['titre']);
            $description = strip_tags($_POST['description']);
            $datedebut = strip_tags($_POST['datedebut']);
            $datefin = strip_tags($_POST['datefin']);
            //$etablissement = strip_tags($_POST['etablissement']);

             
            $experience = new ExperienceModel;
            $experience ->setTitre($titre)
                          ->setDescription($description)
                          ->setDatefin($datefin)
                          ->setDatedebut($datedebut)
                         // ->setEtablissement($etablissement)
                          ->setId_candidats($_SESSION["user"]["id"])
                          ;
              
                           $experience->update();
                
            }
      
      
       
       
        
       

         $findFormation = new FormationModel;
         $findFormation = $findFormation->findAll();

         $findExperience = new ExperienceModel;
         $findExperience = $findExperience->findAll();

        //  var_dump($findExperience);
        //  die;
       

        return $this->render('candidat/backend-candidat-modification-cv.php', compact('findFormation', 'findExperience'), 'home_backend_candidat.php');

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

    public function supprimer($id){
        //echo "merci";
        
        $formation1 = new FormationModel;
        $formation1 = $formation1->delete($id);
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
        $candidat = $candidat->find($_SESSION['user']['id']);

        $can = new CandidatModel;

        
        if(isset($_POST['send'])){

            if(!empty($_POST['password1']) && !empty($_POST['password2'])){

                $pass1 = $_POST['password1'];
                $pass2 = $_POST['password2'];
                $pass = $_POST['pass'];

                if($candidat != $pass){
                    $_SESSION["message"] = "Votre mot de passe ne correspond!";
                }

                var_dump($pass1);
                var_dump($pass2);
                if($pass1 == $pass2){

                    $can->setId($_SESSION['user']['id'])
                            ->setMotdepasse($pass1)
                            ;
                    $can->update();

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

        return $this->render('candidat/backend-liste-emplois.php', [], 'home_backend_candidat.php');

    }
}

