<?php

namespace App\Controllers;
use App\Controllers\Controller;

class FormationsController extends Controller{

    public function index(){

        return $this->render('main/formations.php', [], 'home.php');
    }
   
}