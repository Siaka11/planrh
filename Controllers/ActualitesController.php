<?php

namespace App\Controllers;

use App\Core\Util;
use App\Models\OffreModel;
use App\Models\DomaineModel;
use App\Controllers\Controller;
use App\Models\ActualitesModel;


class ActualitesController extends Controller
{
    
    public function index()
    {
        
        $domaineModel = new DomaineModel;
        $tous_domaines = $domaineModel->findAll();

        $actualitesmodel = new ActualitesModel();
        $actualites = $actualitesmodel->findAll();

        $dernier_act = count($actualites);
        $actualites_der = $actualitesmodel->find(2);

        $offremodel = new OffreModel();

        $util = new Util();

        $this->render('main/actualite.php', compact("actualites", "tous_domaines", "offremodel", "actualites_der", "util"));
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