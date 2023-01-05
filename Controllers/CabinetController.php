<?php
namespace App\Controllers;

use DateTime;
use App\Core\Util;
use App\Models\AdminModel;
use App\Models\OffreModel;
use App\Models\CandidatModel;
use App\Models\EmployeurModel;
use App\Controllers\Controller;
use App\Models\ActualitesModel;
use App\Models\Formation_Cours_Model;
use App\Models\Postuler_Candidat_Offre_Model;



class CabinetController extends Controller{

    public function index(){

        if(!$_SESSION["admin"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /cabinet/login");
            exit;
        }


        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);
        

        return $this->render('cabinet/index.php', compact('admin'), 'home_cabinet.php');
    }

    public function employeurs(){

        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        $employeurmodel = new EmployeurModel();
        $employeurs = $employeurmodel->findAll();
        
        return $this->render('cabinet/liste-employeur.php', compact('admin', 'employeurs'), 'home_backend_cabinet.php');

    }

    public function candidats(){

        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        $candidatmodel = new CandidatModel();
        $candidats = $candidatmodel->findAll();
        
        return $this->render('cabinet/liste-candidat.php', compact('admin', 'candidats'), 'home_backend_cabinet.php');

    }

    public function emplois_postules(){


        if(isset($_POST['changepost'])){

            $pco_model = new Postuler_Candidat_Offre_Model();
            
            $pco_model->setId($_POST['id'])
                      ->setAcceptation($_POST['acceptation']);
            
            $pco_model->update();
        }
        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        $candidatmodel = new CandidatModel();
        $candidats = $candidatmodel->findAll();

        $employeurmodel = new EmployeurModel();
        $employeurs = $employeurmodel->findAll();

        $offremodel = new OffreModel();
        $offres = $offremodel->tous_candidats_postules();

        return $this->render('cabinet/postulation.php', compact('admin', 'offres'), 'home_cabinet.php');

    }

    public function formations(){

        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        $formationmodel = new Formation_Cours_Model();
        $formations = $formationmodel->findAll();
        return $this->render('cabinet/liste-formations.php', compact('admin', 'formations'), 'home_backend_cabinet.php');


    }

    public function ajout_formation(){

            $formationmodel = new Formation_Cours_Model();

            if(isset($_POST['ajout_formation'])){

                $titre = strip_tags($_POST['titre']);
                $description = strip_tags($_POST['description']);
                $date_debut = strip_tags($_POST['date_debut']);
                $date_fin = strip_tags($_POST['date_fin']);
                $auteur = strip_tags($_POST['auteur']);
                $lieu = strip_tags($_POST['lieu']);

                $formationmodel
                            ->setTitre($titre)
                            ->setDate_debut($date_debut)
                            ->setDescription($description)
                            ->setDate_fin($date_fin)
                            ->setAuteur($auteur)
                            ->setLieu($lieu)            
                            ;
            

                $formationmodel->createOne();

                $_SESSION["message"] = "Une nouvelle formation a été ajoutée avec succès!";
                header("Location: /cabinet/formations");

            }

            

        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        return $this->render('cabinet/ajout_formation.php', compact('admin'), 'home_backend_cabinet.php');


    }

    public function actualites(){

        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        $actualitesmodel = new ActualitesModel();
        $actualites = $actualitesmodel->findAll();

        return $this->render('cabinet/liste-actualites.php', compact('admin', 'actualites'), 'home_backend_cabinet.php');


    }

    public function ajout_actualite(){

        $actualitemodel = new ActualitesModel();

        if(isset($_POST['ajout_formation'])){

            //die('okay');
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

            $namedate = new DateTime();
            $name = $namedate->getTimestamp();

            //create file's name
            Util::uploaderactualite($name);

            $image = $name.".$extensionUpload";
            
            $titre = strip_tags($_POST['titre']);
            $description = strip_tags($_POST['description']);


            $actualitemodel
                        ->setTitre($titre)
                        ->setDescription($description)
                        ->setImage($image)          
                        ;
        

            $actualitemodel->createOne();

            $_SESSION["message"] = "Une nouvelle actualité a été ajoutée avec succès!";
            header("Location: /cabinet/actualites");

        }

        

        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        return $this->render('cabinet/ajout_actualite.php', compact('admin'), 'home_backend_cabinet.php');


    }

    public function offres(){

        $offremodel = new OffreModel();

        if(isset($_POST['activation_offre'])){
            
            $offremodel->setId($_POST['id'])
                      ->setEtat($_POST['activation']);
            
            $offremodel->update();
        }
        

        
        $offres = $offremodel->recupere_tous_offres_etat();

        $adminmodel = new AdminModel();
        $admin = $adminmodel->find(1);

        return $this->render('cabinet/offres.php', compact('admin', 'offres'), 'home_cabinet.php');

    }

    public function login(){


        if(isset($_POST['connexion_admin'])){

            $email = strip_tags($_POST['email']);
            $motdepasse = $_POST['motdepasse'];
        
            $employeurmodel = new AdminModel();
            $emailExist = $employeurmodel->findOneByEmailAdmin($email);

            if(!$emailExist){
                $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                header('Location: /cabinet/login');
                exit;
            }

            $pass = $emailExist->motdepasse;
            

            if($motdepasse ==  $pass){
            

                $_SESSION['admin'] = [
                    'id' => $emailExist->id,
                    'nom' => $emailExist->nom,
                    'email' => $emailExist->email,
                ];

                $_SESSION['message'] = "Vous êtes connectés";
                header("Location: /cabinet");
                exit;


            }else{
                $_SESSION['message'] = "Adresse mail ou mot de passe incorrect ";
                header("Location: /cabinet/login");
                exit;
            }

        }

        return $this->render('cabinet/login_admin.php', [], 'login.php');


    }


    public function logout()
    {
        if($_SESSION['admin']){
            unset($_SESSION['admin']);
        }

        header('Location: /main' );
    }
    
    
}


