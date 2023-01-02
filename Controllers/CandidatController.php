<?php


namespace App\Controllers;
use DateTime;
use DateInterval;
use App\Core\Util;
use App\Models\OffreModel;
use App\Controllers\Controller;


class CandidatController extends Controller
{
    
    public function index()
    {
        $i = 0;

      
        $this->render('candidat/index.php', [], 'home_candidat.php');
    }

 
    public function emplois(){

        $offremodel = new OffreModel;

        $util = new Util();

        $datetime = new DateTime();
        $datetime1 = new DateTime();
        //$date = $datetime->modify('-1 day');



        // $interval = new DateInterval('P2D'); // 1 jour
        // //$date = new DateTime('2022-01-01');
        // $aujourdhui = new DateTime();

        // $newDate1 = $aujourdhui->add($interval);
        // $formattedDate1 = $newDate1->format('Y-m-d H:i:s');

        // $newDate2 = $aujourdhui->sub($interval);
        // $formattedDate2 = $newDate2->format('Y-m-d H:i:s');

        // var_dump($aujourdhui->format('Y-m-d H:i:s'));
        // var_dump($formattedDate2);
       
    


        //var_dump($offre_recup);

        $date2 = $datetime1->format('Y-m-d H:i:s');

        if(isset($_POST['filtre_date'])){

            $temps = $_POST['temps'];
   
            switch ($temps) {
                case 0:
                    $date1 = $datetime->modify('-1 day')->format('Y-m-d H:i:s');
                    $filtre = "Récent";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                    break;
                case 1:
                    $date1 = $datetime->modify('-1 day')->format('Y-m-d H:i:s');
                    $filtre = "24h";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;
                case 7:
                    $date1 = $datetime->modify('-6 day')->format('Y-m-d H:i:s');
                    $filtre = "7j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;

                case 14:
                    $date1 = $datetime->modify('-13 day')->format('Y-m-d H:i:s');
                    $filtre = "14j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                   
                    break;

                case 30:
                    $date1 = $datetime->modify('-29 day')->format('Y-m-d H:i:s');
                    $filtre = "30j";
                    $offres = $offremodel->recupere_toutes_offres_by_2_date($date1, $date2);
                    
                    break;
            }



            
        }else{
            $offres = $offremodel->recupere_tous_offres();

        }

        if(!empty($filtre) AND isset($filtre)) 
        {  
            $filtre = $filtre;
            //var_dump($filtre);
        }else{
            $filtre = "";
        }

        // var_dump($filtre);
        $this->render('main/emplois.php', compact('offres', 'util', 'filtre'), 'home_candidat.php');
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