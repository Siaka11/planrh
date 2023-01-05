<?php
namespace App\Controllers;

use DateTime;
use TypeError;
use App\Core\Util;
use App\Models\OffreModel;
use App\Models\DomaineModel;
use App\Models\EmployeurModel;
use App\Controllers\Controller;
use App\Models\TypeEmploiModel;
use App\Models\TypeDemandeModel;
use App\Models\TypeSalaireModel;
use App\Models\Postuler_Candidat_Offre_Model;


class Backend_employeurController extends Controller{


    public function index(){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }

        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);

        $offremodel = new OffreModel;
        $offres = $offremodel->findBy(["id_employeur" => $_SESSION['useremployeur']['id']]);
        $this->render("employeur/index.php", compact('employeur', 'offres'), 'home_backend_employeur.php');
    }


    public function offre($id){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }

        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);
        
        $offremodel = new OffreModel;
        $offre = $offremodel->find($id);

        $typeemploimodel = new TypeEmploiModel;
        $typeemplois = $typeemploimodel->findAll();

        $typedemandemodel = new TypeDemandeModel;
        $typedemandes = $typedemandemodel->findAll();

        $domaineModel = new DomaineModel;
        $domaines = $domaineModel->findAll();

        $typesalairemodel = new TypeSalaireModel;
        $salaires = $typesalairemodel->findAll();

        if(isset($_POST['modifer_offre'])){

            $titre = strip_tags($_POST['titre']);
            $description = strip_tags($_POST['description']);
            $date = strip_tags($_POST['date_expiration']);
            $typeemploi = strip_tags($_POST['typeemploi']);
            $domaine = strip_tags($_POST['domaine']);
            $typedemande = strip_tags($_POST['typedemande']);
            $typesalaire = strip_tags($_POST['typesalaire']);
            $salairemin = strip_tags($_POST['salairemin']);
            $salairemax = strip_tags($_POST['salairemax']);
            $competence = strip_tags($_POST['competence']);
            $adresse = strip_tags($_POST['adresse']);

            $offremodel->setId($id)
                        ->setTitre($titre)
                        ->setDate_expiration($date)
                        ->setDescription($description)
                        ->setTypeemploi($typeemploi)
                        ->setDomaine($domaine)
                        ->setTypedemande($typedemande)
                        ->setTypesalaire($typesalaire)
                        ->setSalairemin($salairemin)
                        ->setSalairemax($salairemax)
                        ->setCompetence($competence)
                        ->setAdresse($adresse)
                        
                        ;
          

            $offremodel->update();
            $_SESSION["message"] = "Votre offre a été modifiée avec succès!";
            header("Location: /backend_employeur/liste_offres");
        }


        $this->render("employeur/index.php", compact('employeur', 'offre', 'typeemplois', 'typedemandes', 'domaines', 'salaires'), 'home_backend_employeur.php');

    }

    public function gestion_candidats(){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }

        $postuler_candidat_offre_model = new OffreModel;
        $candidats_acceptes = $postuler_candidat_offre_model->tous_candidats_postules_by_offre($_SESSION["useremployeur"]["id"], 2);

        //Debut de la pagination
        $offre = new OffreModel;
        $toutes_offres = $offre->findAllEtat();
        $offre_par_page = 5;
        $offres_totales = count($candidats_acceptes);
        $page_totale = ceil($offres_totales / $offre_par_page);
        $page_courante = 1;        
        // Fin de la pagination


        //Acceptation prend la valeur 2
        $postuler_candidat_offre_model = new OffreModel;
        $candidats_acceptes = $postuler_candidat_offre_model->tous_candidats_postules_by_offre($_SESSION["useremployeur"]["id"], 2);

        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);

        $this->render("employeur/backend-employeur-gestion-candidats.php", compact('employeur', 'candidats_acceptes', 'page_totale', 'page_courante'), 'home_backend_employeur.php');

    }

    public function page_candidat($id){
        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }

        $postuler_candidat_offre_model = new OffreModel;
        $candidats_acceptes = $postuler_candidat_offre_model->tous_candidats_postules_by_offre($_SESSION["useremployeur"]["id"], 2);

        //Debut de la pagination
        $offre = new Postuler_Candidat_Offre_Model;
        $toutes_offres = $offre->findAll();
        var_dump(count($toutes_offres));
        $offre_par_page = 5;
        $offres_totales = count($candidats_acceptes);
        $page_totale = ceil($offres_totales / $offre_par_page);
        $page_courante = $id;        
        // Fin de la pagination


        //Acceptation prend la valeur 2
        

        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);

        $this->render("employeur/backend-employeur-gestion-candidats.php", compact('employeur', 'candidats_acceptes', 'page_totale', 'page_courante'), 'home_backend_employeur.php');

    }

    public function modification_pass(){
        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        //echo "hello";
        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }

        if(isset($_POST['modifierpassword'])){

            $passold = $_POST['password_old'];
            $passnew1 = $_POST['password_new1'];
            $passnew2 = $_POST['password_new2'];

            if( $passnew1 != $passnew2 ){
                $_SESSION['message'] = "les mots de passe ne correspondent pas.";
                header("Location: /backend_employeur/modification_pass");
                exit;
            }


            $employeurmodel = new  EmployeurModel;
            $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);

            if(password_verify($passold, $employeur->motdepasse)){


                $pass  = password_hash($passnew1, PASSWORD_DEFAULT);

                $employeur = new EmployeurModel;
                $employeur ->setId($_SESSION['useremployeur']['id'])
                            ->setMotdepasse($pass)
                            ;
                            
                
                $employeur->update();
                
                
                $_SESSION['message'] = "Vous avez modifié votre mot de passe .";
                header("Location: /backend_employeur/modification_pass");
                exit;

            }else{
                $_SESSION['message'] = "Vous avez saisir un mot de passe incorrect";
                header("Location: /backend_employeur/modification_pass");
                exit;
            }


          
            $_SESSION['message'] = "Vous avez modifier votre mot de passe";
            header("Location: /backend_employeur/modification_pass");
            exit;
        }



        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);

        $this->render("employeur/backend-employeur-modification-pass.php", compact('employeur'), 'home_backend_employeur.php');

    }

    public function liste_offres(){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }


        $offres = new OffreModel;
        $domaineModel = new DomaineModel;

        //Debut de la pagination
        $offre = new OffreModel;
        $toutes_offres = $offre->findAllEtat();
        $offre_par_page = 2;
        $offres_totales = count($toutes_offres);
        $page_totale = ceil($offres_totales / $offre_par_page);
        $page_courante = 1;        
        // Fin de la pagination


        $depart = ($page_courante - 1) * $offre_par_page;
        $recupere_tous_offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);

        
        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);

        $offremodel = $offres->offreFromUser($_SESSION["useremployeur"]["id"]);
        
        //var_dump($offremodel);
        $this->render("employeur/backend-employeur-liste-offres.php", compact("offremodel", 'offres', 'domaineModel', 'employeur','page_totale', 'page_courante'), 'home_backend_employeur.php');

    }

    public function page_offre($id){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }


        $offres = new OffreModel;
        $domaineModel = new DomaineModel;

        //Debut de la pagination
        $offre = new OffreModel;
        $toutes_offres = $offre->findAllEtat();
        $offre_par_page = 2;
        $offres_totales = count($toutes_offres);
        $page_totale = ceil($offres_totales / $offre_par_page);
        $page_courante = $id;        
        // Fin de la pagination

        
        $depart = ($page_courante - 1) * $offre_par_page;
        $recupere_tous_offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);

        
        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);

        $offremodel = $offres->offreFromUser($_SESSION["useremployeur"]["id"]);
        
        //var_dump($offremodel);
        $this->render("employeur/backend-employeur-liste-offres.php", compact("offremodel", 'offres', 'domaineModel', 'employeur','page_totale', 'page_courante'), 'home_backend_employeur.php');

    }

    public function profil(){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }

        if(isset($_POST['couverture'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setCouverture($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo de couverture a été changé avec succès!";
            header("Location: /backend_employeur/profil");

        }
        
        $employeur = new EmployeurModel;
        $employeur = $employeur->retrievedatafromprofil($_SESSION["useremployeur"]["id"]);
       // var_dump($employeur);
       // echo "Bonjour";
        //die;

        $updateemployeur = new EmployeurModel;

        if(isset($_POST['updateemployeur'])){
            
            $nom = strip_tags($_POST['nom']);
            $email = strip_tags($_POST['email']);
            $entreprise = strip_tags($_POST['entreprise']);
            $telephone = strip_tags($_POST['telephone']);
            $secteur = strip_tags($_POST['secteur']);
            $web = strip_tags($_POST['web']);
            $description = strip_tags($_POST['description']);
            $facebook = strip_tags($_POST['facebook']);
            $twitter = strip_tags($_POST['twitter']);
            $linkedin = strip_tags($_POST['linkedin']);
            $youtube = strip_tags($_POST['youtube']);
            $siege = strip_tags($_POST['siege']);

            $updateemployeur->setId($_SESSION["useremployeur"]["id"])
                            ->setNom($nom)
                            ->setEmail($email)
                            ->setEntreprise($entreprise)
                            ->setTelephone($telephone)
                            ->setSecteur($secteur)
                            ->setWeb($web)
                            ->setDescription($description)
                            ->setFacebook($facebook)
                            ->setTwitter($twitter)
                            ->setLinkedin($linkedin)
                            ->setYoutube($youtube)
                            ->setSiege($siege)
                          ;
            $updateemployeur->update();


            $_SESSION["message"] = "Vous avez modifié votre profil!";
            header("Location: /backend_employeur/profil");
            exit;
        }

       

        $this->render("employeur/backend-employeur-profil.php", compact("employeur"), 'home_backend_employeur.php');

    }

    public function honoraire(){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }


        $this->render("employeur/backend-employeur-honoraire.php", [], 'home_backend_employeur.php');

    }

    public function poster_emplois(){

        if(!$_SESSION["useremployeur"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /login");
            exit;
        }

        if(isset($_POST['charger'])){

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploader($name);

            $image = $name.'.png';

            $employeur = new EmployeurModel;
            $employeur ->setId($_SESSION['useremployeur']['id'])
                          ->setImage($image)
                          ;
                         
              
             $employeur->update();


            $_SESSION["message"] = "Votre photo a été changé avec succès!";
            header("Location: /backend_employeur");

        }


        $employeurmodel = new EmployeurModel;
        $employeur = $employeurmodel->find($_SESSION['useremployeur']['id']);


        $domaine = new DomaineModel;
        $domaine = $domaine->findAll();

        $typeemploi = new TypeEmploiModel;
        $typeemploi = $typeemploi->findAll();
        if(isset($_POST)){

            if(isset($_POST['titre'])){

                $titre = strip_tags($_POST['titre']);
                $description = strip_tags($_POST['description']);
                $date = strip_tags($_POST['date']);
                $typeemploi = strip_tags($_POST['typeemploi']);
                $secteur = strip_tags($_POST['secteur']);
                $typedemande = strip_tags($_POST['typedemande']);
                $typesalaire = strip_tags($_POST['typesalaire']);
                $salairemin = strip_tags($_POST['salairemin']);
                $salairemax = strip_tags($_POST['salairemax']);
                $competence = strip_tags($_POST['competence']);
                $adresse = strip_tags($_POST['adresse']);
                
                
                $offremodel = new OffreModel;
                 
                $offremodel ->setTitre($titre)
                              ->setDescription($description)
                              ->setDate_expiration($date)
                              ->setTypeemploi($typeemploi)
                              ->setDomaine($secteur)
                              ->setTypedemande($typedemande)
                              ->setTypesalaire($typesalaire)
                              ->setSalairemin($salairemin)
                              ->setSalairemax($salairemax)
                              ->setCompetence($competence)
                              ->setAdresse($adresse)
                              ->setId_employeur($_SESSION["useremployeur"]["id"])
                              ->setId_cabinet(0)
                              
                              ;
                            

                $offremodel->createOne();

            header("Location: /backend_employeur/liste_offres");
            $_SESSION["message"] = "Votre offre a été créee avec succès!";

            exit;

            }
           
            
        }
        $this->render("employeur/backend-employeur-poster-emplois.php", compact('domaine', 'typeemploi', 'employeur'), 'home_backend_employeur.php');

      
    }

    public function deleteoffres($id){

        $offremodel = new OffreModel;
        $offremodel = $offremodel->deleteoffre($id);

        header("Location: /backend_employeur/liste_offres");
        $_SESSION["message"] = "Votre offre a été supprimée avec succès!";

        exit;
    }

}
