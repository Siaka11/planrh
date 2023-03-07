<?php

namespace App\fr\Controllers;

use App\Core\Util;
use App\Models\OffreModel;
use App\Models\VideoModel;
use App\Models\DomaineModel;
use App\Models\PubliciteModel;
use App\fr\Controllers\Controller;
use App\Models\ActualitesModel;
use App\Models\MotivationModel;
use App\Models\Ville_RecrutementModel;
use App\Models\Recrutement_EtrangerModel;


class RecrutementinternationalController extends Controller
{
    
    public function index()
    {
        
       
        $this->render('main/recrutementinter.php', []);

    }

    public function destination($id)
    {
        
       $villemodel = new Ville_RecrutementModel;
        $ville = $villemodel->find($id);

        if(isset($_POST['envoyerMessage'])){
            
        $recrutementmodel = new Recrutement_EtrangerModel;
        $recrutementmodel
            ->setNom($_POST['nom'])
            ->setVille($_POST['ville'])
            ->setEmail($_POST['email'])
            ->setAdresse($_POST['adresse'])
            ->setTelephone($_POST['telephone'])
            ->setMessage($_POST['message'])  
            ->setCompagnie($_POST['compagine'])          
            ;


        $recrutementmodel->createOne();


        }
        $this->render('main/destination.php', compact('ville'));

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