<?php


namespace App\fr\Controllers;

use DateTime;
use DateInterval;
use App\Core\Util;
use App\Models\OffreModel;
use App\fr\Controllers\Controller;
use App\Models\DomaineModel;
use App\Models\TypeEmploiModel;
use App\Models\CandidatModel;
use App\Models\EmployeurModel;


class CandidatController extends Controller
{
    
    public function index()
    {
        $i = 0;

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



      
        $this->render('candidat/index.php', [], 'home_candidat.php');
    }

 
    public function emplois(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter pour accéder à plus d'offres d'emplois";
            header("Location: /");
            exit;
        }

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


        $offremodel = new OffreModel;

        $util = new Util();

        $datetime = new DateTime();
        $datetime1 = new DateTime();
        
        $domaineModel = new DomaineModel;
        $tous_domaines = $domaineModel->findAll();

        $typeemploimodel = new TypeEmploiModel();
        $typeemplois = $typeemploimodel->findAll();


        //var_dump($offre_recup);

        $date2 = $datetime1->format('Y-m-d H:i:s');

        if(isset($_POST['filtre_date'])){

            $temps = $_POST['temps'];
   
            switch ($temps) {
                case 0:
                    $date1 = $datetime->modify('-1 day')->format('Y-m-d H:i:s');
                    $filtre = "Récent";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                    break;
                case 1:
                    $date1 = $datetime->modify('-1 day')->format('Y-m-d H:i:s');
                    $filtre = "24h";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;
                case 7:
                    $date1 = $datetime->modify('-6 day')->format('Y-m-d H:i:s');
                    $filtre = "7j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;

                case 14:
                    $date1 = $datetime->modify('-13 day')->format('Y-m-d H:i:s');
                    $filtre = "14j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;

                case 30:
                    $date1 = $datetime->modify('-29 day')->format('Y-m-d H:i:s');
                    $filtre = "30j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                    
                    break;
            }



            
        }elseif(isset($_POST['filtre_domaine'])){
            
            $domaine = $_POST['domaine'];
            $offres = $offremodel->offre_domaine_recherche($domaine);

        }elseif(isset($_POST['filtre_typeemploi'])){
            
            $typeemploi = $_POST['typeemploi'];
            $offres = $offremodel->offre_domaine_typeemploi($typeemploi);

        }else{

            $offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);

        }



        if(!empty($filtre) AND isset($filtre)) 
        {  
            $filtre = $filtre;
            //var_dump($filtre);
        }else{
            $filtre = "";
        }

        $toutes_les_offres = $offremodel->findAllEtat();
        // var_dump($filtre);
        $this->render('main/emplois.php', compact('recupere_tous_offres','offres', 'util', 'filtre', 'toutes_les_offres', 'tous_domaines', 'typeemplois', 'page_courante', 'page_totale'), 'home_candidat.php');
    }

    public function emplois_page($id){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

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


        $candidatmodel = new CandidatModel;
        $candidat = $candidatmodel->find($_SESSION['user']['id']);

        $offre = new OffreModel;
        $toutes_offres = $offre->findAllEtat();
        $offre_par_page = 5;
        $offres_totales = count($toutes_offres);
        $page_totale = ceil($offres_totales / $offre_par_page);
        $page_courante = $id;
        
        $depart = ($page_courante - 1) * $offre_par_page;
        $recupere_tous_offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);


        $offremodel = new OffreModel;

        $util = new Util();

        $datetime = new DateTime();
        $datetime1 = new DateTime();
        
        $domaineModel = new DomaineModel;
        $tous_domaines = $domaineModel->findAll();

        $typeemploimodel = new TypeEmploiModel();
        $typeemplois = $typeemploimodel->findAll();


        //var_dump($offre_recup);

        $date2 = $datetime1->format('Y-m-d H:i:s');

        if(isset($_POST['filtre_date'])){

            $temps = $_POST['temps'];
   
            switch ($temps) {
                case 0:
                    $date1 = $datetime->modify('-1 day')->format('Y-m-d H:i:s');
                    $filtre = "Récent";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                    break;
                case 1:
                    $date1 = $datetime->modify('-1 day')->format('Y-m-d H:i:s');
                    $filtre = "24h";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;
                case 7:
                    $date1 = $datetime->modify('-6 day')->format('Y-m-d H:i:s');
                    $filtre = "7j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;

                case 14:
                    $date1 = $datetime->modify('-13 day')->format('Y-m-d H:i:s');
                    $filtre = "14j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;

                case 30:
                    $date1 = $datetime->modify('-29 day')->format('Y-m-d H:i:s');
                    $filtre = "30j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                    
                    break;
            }



            
        }elseif(isset($_POST['filtre_domaine'])){
            
            $domaine = $_POST['domaine'];
            $offres = $offremodel->offre_domaine_recherche($domaine);

        }elseif(isset($_POST['filtre_typeemploi'])){
            
            $typeemploi = $_POST['typeemploi'];
            $offres = $offremodel->offre_domaine_typeemploi($typeemploi);

        }else{

            $offres = $offre->recupere_tous_offres_avec_limit($depart,$offre_par_page);

        }



        if(!empty($filtre) AND isset($filtre)) 
        {  
            $filtre = $filtre;
            //var_dump($filtre);
        }else{
            $filtre = "";
        }

        $toutes_les_offres = $offremodel->findAllEtat();
        // var_dump($filtre);
        $this->render('main/emplois.php', compact('recupere_tous_offres','offres', 'util', 'filtre', 'toutes_les_offres', 'tous_domaines', 'typeemplois', 'page_courante', 'page_totale'), 'home_candidat.php');
    }

    public function candidature(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

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


        $this->render('main/candidature.php', [], 'home_candidat.php');
    }

    public function recrutement(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

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
        

        $this->render('main/recrutement.php', [], 'home_candidat.php');
    }

    /* public function merci($params)
    {
        var_dump($params);
        echo 'ceci est la foonction merci';
    } */
}