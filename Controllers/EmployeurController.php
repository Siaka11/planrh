<?php
namespace App\Controllers;
use App\Controllers\Controller;

class EmployeurController extends Controller{

    public function index(){

        //return $this->render('main/erecrutement.php', []);
    }

    public function erecrutement(){

        return $this->render('main/erecrutement.php', [], 'home_employeur.php');
    }

    public function recrutement_permanent(){
        return $this->render('main/recrutement-permanent.php', [], 'home_employeur.php');
    }

    public function chasseur_de_tete(){
        return $this->render('main/chasseur-de-tete.php', [], 'home_employeur.php');
    }

    public function placement_temporaire(){
        return $this->render('main/placement-temporaire.php', [], 'home_employeur.php');
    }

    public function consultation_rh(){
        return $this->render('main/consultation-rh.php', [], 'home_employeur.php');
    }

    public function gestion_paie(){
        return $this->render('main/gestion-paie.php', [], 'home_employeur.php');
    }

    public function impartition(){
        return $this->render('main/impartition.php', [], 'home_employeur.php');
    }

    public function verification(){
        return $this->render('main/verification.php', [], 'home_employeur.php');
    }
    
    
}


