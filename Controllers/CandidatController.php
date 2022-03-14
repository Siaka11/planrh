<?php


namespace App\Controllers;
use App\Controllers\Controller;


class CandidatController extends Controller
{
    
    public function index()
    {
        $i = 0;

      
        $this->render('candidat/index.php', [], 'home_candidat.php');
    }

 
    public function emplois(){

        $this->render('main/emplois.php', [], 'home_candidat.php');
    }

    public function candidature(){

        $this->render('main/candidature.php', [], 'home_candidat.php');
    }

    public function recrutement(){

        $this->render('main/recrutement.php', [], 'home_candidat.php');
    }

    /* public function merci($params)
    {
        var_dump($params);
        echo 'ceci est la foonction merci';
    } */
}