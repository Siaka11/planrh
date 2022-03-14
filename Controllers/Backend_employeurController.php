<?php
namespace App\Controllers;

use App\Models\OffreModel;
use App\Controllers\Controller;
use App\Models\Domaine;
use App\Models\EmployeurModel;
use App\Models\TypeEmploiModel;
use TypeError;

class Backend_employeurController extends Controller{


    public function index(){

        $this->render("employeur/index.php", [], 'home_backend_employeur.php');
    }

    public function gestion_candidats(){

        $this->render("employeur/backend-employeur-gestion-candidats.php", [], 'home_backend_employeur.php');

    }

    public function modification_pass(){

        $this->render("employeur/backend-employeur-modification-pass.php", [], 'home_backend_employeur.php');

    }

    public function liste_offres(){

        $offremodel = new OffreModel;
        $offremodel = $offremodel->offreFromUser($_SESSION['user']['id']);
        
        //var_dump($offremodel);
        $this->render("employeur/backend-employeur-liste-offres.php", compact("offremodel"), 'home_backend_employeur.php');

    }

    public function profil(){

        $employeur = new EmployeurModel;
        $employeur = $employeur->retrievedatafromprofil($_SESSION['user']['id']);
        
        $updateemployeur = new EmployeurModel;

        if(isset($_POST['updateemployeur'])){
            
            $nom = strip_tags($_POST['nom']);
            $prenom = strip_tags($_POST['prenom']);
            //$nomotdepassem = strip_tags($_POST['motdepasse']);
            $email = strip_tags($_POST['email']);
            $entreprise = strip_tags($_POST['entreprise']);
            $datecreation = strip_tags($_POST['datecreation']);
            $telephone = strip_tags($_POST['telephone']);
            $secteur = strip_tags($_POST['secteur']);
            $web = strip_tags($_POST['web']);
            $description = strip_tags($_POST['description']);
            $facebook = strip_tags($_POST['facebook']);
            $twitter = strip_tags($_POST['twitter']);
            $linkedin = strip_tags($_POST['linkedin']);
            $youtube = strip_tags($_POST['youtube']);
            $siege = strip_tags($_POST['siege']);

            $updateemployeur->setId($_SESSION['user']['id'])
                            ->setNom($nom)
                            ->setPrenom($prenom)
                            ->setEmail($email)
                            ->setEntreprise($entreprise)
                            ->setDatecreation($datecreation)
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
        }

        $this->render("employeur/backend-employeur-profil.php", compact("employeur"), 'home_backend_employeur.php');

    }

    public function honoraire(){

        $this->render("employeur/backend-employeur-honoraire.php", [], 'home_backend_employeur.php');

    }

    public function poster_emplois(){

        $domaine = new Domaine;
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
                              ->setDate($date)
                              ->setTypeemploi($typeemploi)
                              ->setSecteur($secteur)
                              ->setTypedemande($typedemande)
                              ->setTypesalaire($typesalaire)
                              ->setSalairemin($salairemin)
                              ->setSalairemax($salairemax)
                              ->setCompetence($competence)
                              ->setAdresse($adresse)
                              ->setId_employeur($_SESSION['user']['id'])
                              ->setId_cabinet(0)
                              
                              ;
                $offremodel->createOne();

            }
           
            
        }
        $this->render("employeur/backend-employeur-poster-emplois.php", compact('domaine', 'typeemploi'), 'home_backend_employeur.php');

      
    }

    public function deleteoffres($id){

        $offremodel = new OffreModel;
        $offremodel = $offremodel->deleteoffre($id);

        header("Location: /backend_employeur/liste_offres");
        exit;
    }

}
