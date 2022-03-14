<?php

namespace App\Controllers;

use App\Models\CandidatModel;
use App\Models\Domaine;
use App\Models\JaimeModel;

class Backend_candidatController extends Controller{

    public function index(){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        return $this->render('candidat/index.php', [], 'home_backend_candidat.php');
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


        if(isset($_POST)){

            
            $candidat = new CandidatModel;

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
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }

        return $this->render('candidat/backend-candidat-modification-cv.php', [], 'home_backend_candidat.php');

    }

    public function modification_pass(){
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
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

