<?php


namespace App\fr\Controllers;

use DateTime;
use App\Core\Util;
use App\Models\Model;
use App\Models\OffreModel;
use App\Models\OffresModel;
use App\Models\DomaineModel;
use App\Models\CandidatModel;
use App\Models\EmployeurModel;
use App\Models\PubliciteModel;
use App\fr\Controllers\Controller;
use App\Models\TypeEmploiModel;
use App\Models\Aimer_Candidat_Offre_Model;
use App\Models\Postuler_Candidat_Offre_Model;
use App\Models\Formation_Cours_Model;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class ForumController extends Controller
{
    
    public function index()
    {
       

        
        $this->render('forum/index.php', []);
    }

}
