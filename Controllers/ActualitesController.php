<?php

namespace App\Controllers;

use App\Core\Util;
use App\Models\OffreModel;
use App\Models\DomaineModel;
use App\Controllers\Controller;
use App\Models\ActualitesModel;
use App\Models\PubliciteModel;


class ActualitesController extends Controller
{
    
    public function index()
    {
        
        $domaineModel = new DomaineModel;
        $tous_domaines = $domaineModel->findAll();

        $actualitesmodel = new ActualitesModel();
        $actualites = $actualitesmodel->findAll();

        $actualites_derniere = $actualitesmodel->derniere_actualite();

        $offremodel = new OffreModel();
        $util = new Util();

        $limite_actualite_une = $actualitesmodel->limite_actualite_une();

        $actualite_autre = $actualitesmodel->actualite_autre();

        $publicitemodel = new PubliciteModel();
        $publicites = $publicitemodel->findAll();

        $actualite_autre_premier = $actualitesmodel->actualite_autre_premier();
        $this->render('main/actualite.php', compact("actualites", "tous_domaines", "offremodel", "actualites_derniere", "util", 'limite_actualite_une', 'actualite_autre', 'actualite_autre_premier', 'publicites'));

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