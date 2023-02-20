<?php

namespace App\fr\Controllers;

use App\Core\Util;
use App\Models\OffreModel;
use App\Models\VideoModel;
use App\Models\DomaineModel;
use App\Models\EmployeurModel;
use App\Models\PubliciteModel;
use App\fr\Controllers\Controller;
use App\Models\ActualitesModel;
use App\Models\MotivationModel;


class ActualitesController extends Controller
{
    
    public function index()
    {
        
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
        
        $domaineModel = new DomaineModel;
        $tous_domaines = $domaineModel->findAll();

        $actualitesmodel = new ActualitesModel();
        $actualites = $actualitesmodel->findAll();

        $actualites_derniere = $actualitesmodel->derniere_actualite();

        $offremodel = new OffreModel();
        $util = new Util();

        $limite_actualite_une = $actualitesmodel->limite_actualite_une();

        $actualite_autre = $actualitesmodel->actualite_autre();

        $publicitemodel = new PubliciteModel();
        $publicites = $publicitemodel->findAll();

        $videomodel = new VideoModel();
        $videos = $videomodel->findWithLimit();

        $motivationmodel = new MotivationModel();
        $motivations = $motivationmodel->findWithLimit();


        $actualite_autre_premier = $actualitesmodel->actualite_autre_premier();
        $this->render('main/actualite.php', compact("actualites", "tous_domaines", "offremodel", "actualites_derniere", "util", 'limite_actualite_une', 'actualite_autre', 'actualite_autre_premier', 'publicites', 'motivations', 'videos'));

    }

 
    

}


/* class ActualiteContoller extends Controller
   class ActualiteController extends Controller
{

    public function index(){

        echo 'Bonjour';
        //return $this->render('main/actualite.php', []);
    }

} */