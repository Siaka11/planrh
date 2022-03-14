<?php

namespace App\Controllers;
use App\Controllers\Controller;


class ActualitesController extends Controller
{
    
    public function index()
    {
        
        $this->render('main/actualite.php', []);
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