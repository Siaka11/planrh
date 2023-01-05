<?php

namespace App\Controllers;

use DateTime;
use App\Core\Util;
use Dompdf\dompdf;
use App\Models\Model;
use App\Models\OffreModel;
use App\Models\DomaineModel;
use App\Models\CandidatModel;
use App\Models\EmployeurModel;
use App\Models\FormationModel;
use App\Models\CompetenceModel;
use App\Models\ExperienceModel;
use App\Models\RecompenseModel;
use App\Models\Aimer_Candidat_Offre_Model;
use App\Models\Postuler_Candidat_Offre_Model;

class Backend_candidatController extends Controller{

    public function index(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);

        $offre = new OffreModel;
        $toutes_offres = $offre->findAllEtat();
        $offre_par_page = 5;
        $offres_totales = count($toutes_offres);
        $page_totale = ceil($offres_totales / $offre_par_page);
        $page_courante = 1;
        
        $depart = ($page_courante - 1) * $offre_par_page;

        $recupere_tous_offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);

        $postuler = new Postuler_Candidat_Offre_Model;
        $postuler_Candidat_Offre_Model = $postuler->tous_les_offres_by_candidat($_SESSION['user']['id']);
        $toutes_offres_postulees = count($postuler_Candidat_Offre_Model);
        //var_dump($toutes_offres_postulees);
        $tous_les_candidatures_acceptees = $postuler->tous_les_candidatures_acceptees($_SESSION['user']['id']);
        $tous_les_candidatures_acceptees = count($tous_les_candidatures_acceptees);

        $tous_les_candidatures_refusees = $postuler->tous_les_candidatures_refusees($_SESSION['user']['id']);
        $tous_les_candidatures_refusees = count($tous_les_candidatures_refusees);

        $util = new Util();

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $candidat = new CandidatModel;
            $candidat ->setId($_SESSION['user']['id'])
                          ->setImage($image)
                          ;
                         
              
             $candidat->update();

            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_candidat");

        }
        
       

        return $this->render('candidat/index.php', compact('recupere_tous_offres', 'util', 'page_totale', 'page_courante', 'toutes_offres_postulees', 'candidat', 'tous_les_candidatures_acceptees', 'tous_les_candidatures_refusees'), 'home_backend_candidat.php');
    }


    public function page($id){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);

        $offre = new OffreModel;
        $toutes_offres = $offre->findAllEtat();
        $offre_par_page = 5;
        $offres_totales = count($toutes_offres);
        $page_totale = ceil($offres_totales / $offre_par_page);
        $page_courante = $id;
        
        $depart = ($id - 1) * $offre_par_page;
        $recupere_tous_offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);

        $postuler = new Postuler_Candidat_Offre_Model;
        $postuler_Candidat_Offre_Model = $postuler->tous_les_offres_by_candidat($_SESSION['user']['id']);
        $toutes_offres_postulees = count($postuler_Candidat_Offre_Model);
        //var_dump($toutes_offres_postulees);
        $tous_les_candidatures_acceptees = $postuler->tous_les_candidatures_acceptees($_SESSION['user']['id']);
        $tous_les_candidatures_acceptees = count($tous_les_candidatures_acceptees);

        $tous_les_candidatures_refusees = $postuler->tous_les_candidatures_refusees($_SESSION['user']['id']);
        $tous_les_candidatures_refusees = count($tous_les_candidatures_refusees);


        $util = new Util();

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $candidat = new CandidatModel;
            $candidat ->setId($_SESSION['user']['id'])
                          ->setImage($image)
                          ;
                         
              
             $candidat->update();

            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_candidat");

        }
       

        return $this->render('candidat/page.php', compact('recupere_tous_offres', 'util', 'page_totale', 'page_courante', 'toutes_offres_postulees', 'candidat', 'tous_les_candidatures_acceptees', 'tous_les_candidatures_refusees'), 'home_backend_candidat.php');
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
        $findFormation = $findFormation->findBy(["id_candidat" =>$_SESSION['user']['id']]);

        $findExperience = new ExperienceModel;
        $findExperience = $findExperience->findBy(["id_candidat" =>$_SESSION['user']['id']]);

        $findReccompense = new RecompenseModel;
        $findReccompense = $findReccompense->findBy(["id_candidat" =>$_SESSION['user']['id']]);

        $comptences = new CompetenceModel;
        $comptences = $comptences->findBy(["id_candidat" =>$_SESSION['user']['id']]);
        

        return $this->render('candidat/backend-candidat-cv.php', compact('findFormation', 'findExperience', 'findReccompense', 'users', 'comptences'), 'generatepdf.php');


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

        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);


        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $candidat = new CandidatModel;
            $candidat ->setId($_SESSION['user']['id'])
                          ->setImage($image)
                          ;
                         
              
             $candidat->update();

            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_candidat");

        }

        //$candidat = new CandidatModel;
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
            
            
            //var_dump($_SESSION['user']['id']);
            $candidatmodel->setId($_SESSION['user']['id'])
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
            $candidatmodel->update();
            
            header("Location: /backend_candidat/profil");
            exit;
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
    

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $candidat = new CandidatModel;
            $candidat ->setId($_SESSION['user']['id'])
                          ->setImage($image)
                          ;
                         
              
             $candidat->update();

            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_candidat");

        }


        $offre = new OffreModel;
        $findcompany = new EmployeurModel;
        //var_dump($findcompany->findBy());
        //die;
        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);

        $candidat_aime_model = new Aimer_Candidat_Offre_Model;
        $candidat_aimes = $candidat_aime_model->tous_like_by_offre_candidat($_SESSION["user"]["id"]);



        return $this->render('candidat/backend-candidat-emplois-enregistres.php', compact( 'offre', 'candidat_aimes', 'candidat'), 'home_backend_candidat.php');

    }

    public function modification_cv(){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $candidat = new CandidatModel;
            $candidat ->setId($_SESSION['user']['id'])
                          ->setImage($image)
                          ;
                         
              
             $candidat->update();

            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_candidat");

        }
        
        if(isset($_POST)){
           
            if(isset($_POST['envoyer_competence']))
            {
                $titre = strip_tags($_POST['titre']);
                $pourcentage = strip_tags($_POST['pourcentage']);

                $comptencemodel = new CompetenceModel;
                $comptencemodel ->setTitre($titre)
                              ->setPourcentage($pourcentage)
                              ->setId_candidat($_SESSION["user"]["id"])
                              ;
                  
                $comptencemodel->createOne();  

               $_SESSION["message"] = "Vous avez saisi une compétence";
               //$_SESSION["information"] = "Vous avez saisi une formation";
                header("Location: /backend_candidat/modification_cv/#competence");
                exit;

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
                              ->setId_candidat($_SESSION["user"]["id"])

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
                          ->setId_candidat($_SESSION["user"]["id"])

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
                          ->setId_candidat($_SESSION["user"]["id"])
                          ;
                         
              
                           $experience->update();
                
            }
      
        
       
       
        
       

         $findFormation = new FormationModel;
         $findFormation = $findFormation->findBy(["id_candidat" =>$_SESSION['user']['id']]);

         $findExperience = new ExperienceModel;
         $findExperience = $findExperience->findBy(["id_candidat" =>$_SESSION['user']['id']]);

         $findReccompense = new RecompenseModel;
         $findReccompense = $findReccompense->findBy(["id_candidat" =>$_SESSION['user']['id']]);

         $comptencemodel = new CompetenceModel;
         $comptencemodels = $comptencemodel->findBy(["id_candidat" =>$_SESSION['user']['id']]);
         // var_dump($comptencemodel);
        //  die;

        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);

       
        if(isset($_POST['modifier_competence'])){

            
            $id = strip_tags($_POST['id_competence']);
            $titre = strip_tags($_POST['titre']);
            $pourcentage = strip_tags($_POST['pourcentage']);

            var_dump($id);
            var_dump($titre);
            var_dump($pourcentage);
            //die;

            $comptencemodel ->setId($id)
                          ->setTitre($titre)
                          ->setPourcentage($pourcentage)
                          ->setId_candidat($_SESSION["user"]["id"])
                          ;
                         
              
             $comptencemodel->update();

             $_SESSION["message"] = "Cette compétence a été modifiée ";
              //$_SESSION["information"] = "Vous avez saisi une formation";
                header("Location: /backend_candidat/modification_cv");
                exit;
        }

        return $this->render('candidat/backend-candidat-modification-cv.php', compact('findFormation', 'findExperience', 'findReccompense', 'candidat', 'comptencemodels'), 'home_backend_candidat.php');

    }

    public function modification($id){

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $candidat = new CandidatModel;
            $candidat ->setId($_SESSION['user']['id'])
                          ->setImage($image)
                          ;
                         
              
             $candidat->update();

            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_candidat");

        }
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

        // $candidat = new CandidatModel;
        // $candidatpass = $candidat->find($_SESSION['user']['motdepasse']);

        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);

        $can = new CandidatModel;

        if(isset($_POST['modifierpassword'])){

            $passold = $_POST['password_old'];
            $passnew1 = $_POST['password_new1'];
            $passnew2 = $_POST['password_new2'];

            if( $passnew1 != $passnew2 ){
                $_SESSION['message'] = "les mots de passe ne correspondent pas.";
                header("Location: /backend_candidat/modification_pass");
                exit;
            }


            $candidatmodel = new  CandidatModel;
            $candidat = $candidatmodel->find($_SESSION['user']['id']);

            if(password_verify($passold, $candidat->motdepasse)){


                $pass  = password_hash($passnew1, PASSWORD_DEFAULT);

                $candidat = new CandidatModel;
                $candidat ->setId($_SESSION['user']['id'])
                            ->setMotdepasse($pass)
                            ;
                            
                
                $candidat->update();
                
                
                $_SESSION['message'] = "Vous avez modifié votre mot de passe .";
                header("Location: /backend_candidat/modification_pass");
                exit;

            }else{
                $_SESSION['message'] = "Vous avez saisir un mot de passe incorrect";
                header("Location: /backend_candidat/modification_pass");
                exit;
            }


          
            $_SESSION['message'] = "Vous avez modifier votre mot de passe";
            header("Location: /backend_candidat/modification_pass");
            exit;
        }



        return $this->render('candidat/backend-candidat-modification-pass.php', compact('candidat'), 'home_backend_candidat.php');

    }

    public function liste_emplois(){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $candidat = new CandidatModel;
            $candidat ->setId($_SESSION['user']['id'])
                          ->setImage($image)
                          ;
                         
              
             $candidat->update();

            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_candidat");

        }
        
        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);

        $postuler = new Postuler_Candidat_Offre_Model;
        $candidat_offres = $postuler->tous_les_offres_by_candidat($_SESSION['user']['id']);

        

        $offre = new OffreModel;
        $findcompany = new EmployeurModel;

        return $this->render('candidat/backend-liste-emplois.php', compact('offre', 'findcompany', 'candidat', 'candidat_offres'), 'home_backend_candidat.php');

    }

    public function quitter(){

        unset($_SESSION['user']);
        header('Location: /login' );
    }
}

