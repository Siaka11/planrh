<?php

namespace App\Controllers;

use App\Core\Util;
use App\Models\OffreModel;
use App\Models\VideoModel;
use App\Models\DomaineModel;
use App\Models\PubliciteModel;
use App\Controllers\Controller;
use App\Models\ActualitesModel;
use App\Models\MotivationModel;


class RecrutementinternationalController extends Controller
{
    
    public function index()
    {
        
       
        $this->render('main/recrutementinter.php', []);

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