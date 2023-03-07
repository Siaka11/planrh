<?php


namespace App\fr\Controllers;

use DateTime;
use App\Core\Util;
use App\Models\Model;
use App\Models\ForumModel;
use App\Models\OffreModel;
use App\Models\OffresModel;
use App\Models\DomaineModel;
use App\Models\CandidatModel;
use PHPMailer\PHPMailer\SMTP;
use App\Models\EmployeurModel;
use App\Models\PubliciteModel;
use App\Models\TypeEmploiModel;
use App\fr\Controllers\Controller;
use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\PHPMailer;
use App\Models\Formation_Cours_Model;
use App\Models\Aimer_Candidat_Offre_Model;
use App\Models\Postuler_Candidat_Offre_Model;
use App\Models\Commentaire_Forum_Model;
use App\Models\Reponse_Commentaire_Model;



class ForumController extends Controller
{
    
    public function index()
    {

        header("Location: /fr/forum/list/1");    
        exit;

        // $forummodel = new ForumModel;
        // $forums = $forummodel->three_forums(); 

        // $forum = $forummodel->last_forum();

        // $this->render('forum/index.php', compact('forums', 'forum'));
    }

    public function list($id)
    {
        $forummodel = new ForumModel;
        $commentaire_forum_model = new Commentaire_Forum_Model;

        $forum = $forummodel->find($id);
        $forums = $forummodel->three_forums();

       

        $commentaire_forums = $commentaire_forum_model->commentaire_forum($id);
        
        $forumById = $forummodel->findBy([$id]);


        if(isset($_POST['envoyerCommentaire'])){

            if(!$_SESSION["user"]["id"]){
                $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter à un compte candidat!";
                header("Location: /fr/main");
                exit;
            }
            if(!empty($_POST['description'])){
              
                $description = $_POST['description'];
                $commentaire_forum_id = $_POST['commentaire_forum_id'];
                
                var_dump($commentaire_forum_id);die;

                $reponseCom = new Reponse_Commentaire_Model;
                $reponseCom ->setDescription($description)
                              ->setAuteur_id($_SESSION["user"]["id"])
                              ->setCommentaire_forum_id($commentaire_forum_id)
                              ;
                  
                $reponseCom->createOne();  
                
                header("Location: /fr/forum/$id");
                exit;

            }else{
                header("Location: /fr/forum");
                exit;
            }

        }
        $this->render('forum/list.php', compact('forum', 'forumById', 'forums', 'commentaire_forums'));
    }

}
