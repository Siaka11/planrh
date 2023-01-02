<?php

namespace App\Controllers;
use App\Controllers\Controller;
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
   
}