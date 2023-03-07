<?php

namespace App\fr\Controllers;

use App\fr\Controllers\Controller;
use App\Models\Formation_Cours_Model;


class FormationsController extends Controller{

    public function index(){

        $formationmodel  = new Formation_Cours_Model;

        if(isset($_POST["recherche"])){

            $recherche = $_POST["filtre"];
            $formations = $formationmodel->recherche_formation($recherche);
            

        }else{

            $formations = $formationmodel->findAll();

        }

        $filtres = $formationmodel->findAll();

        return $this->render('main/formations.php', compact('formations', 'filtres'), 'home.php');
    }

    public function details_formation($id){

        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter à un compte candidat!";
            header("Location: /");
            exit;
        }
        $for_cours_model = new Formation_Cours_Model;
        $formation = $for_cours_model->find($id);

       
        $this->render('main/details_formation.php', compact('formation'), "home_second.php");
    }
   
}