<?php


namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\CandidatModel;
use App\Models\Domaine;
use App\Models\EmployeurModel;
use App\Models\JaimeModel;
use App\Models\Model;
use App\Models\OffreModel;
use App\Models\OffresModel;
use DateTime;

class MainController extends Controller
{
    
    public function index()
    {
        $i = 0;
        $emploiModel = new OffreModel();
        $emploiRecent = $emploiModel->findAll();

        $domaine = new Domaine;
        $domaine = $domaine->findAll();

        if(isset($_POST)){
            if(isset($_POST['send'])){
                
                $email = strip_tags($_POST['email']);
                $motdepasse = $_POST['motdepasse'];

                
           
                $candidatmodel = new CandidatModel;
                //var_dump($userModel);
                $emailExist = $candidatmodel->findOneByEmail($email);
                if($emailExist == false){
                    $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /main');
                    exit;
                }
               //$passwordExist = $userModel->findOneByPassword($password);
                //$passwordExist = $emailExist->findOneByLogin($login);
                //var_dump($passwordExist);
                $pass= $emailExist->motdepasse;
               // var_dump($pass);
                //die;
               //var_dump($passwordExist->password);
               //var_dump($password);
                //var_dump($passwordExist->getId());
                
               // var_dump($emailExist);
              //  var_dump($passwordExist);
               //die;
    
    
                if (!$emailExist) {
                    $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /users/login');
                    exit;
                }
    
                $user = $candidatmodel->hydrate($emailExist);
               // var_dump($user);
    
    
    
                if ($pass == $motdepasse) {
                    $user->setSession();
                    var_dump($user);
                    header('Location:  /candidat');
                    exit;
                } else {
                    $_SESSION['erreur'] = 'Le mot de passe est incorrect';
                    header('Location: /');
                    exit;
                }

            }
            
        }else{
            echo "NOK";
        }

        if(isset($_POST['sendemployeur'])){
            
            var_dump($_POST['email']);
            $email = strip_tags($_POST['email']);
            $motdepasse = $_POST['motdepasse'];

            $employeurModel = new EmployeurModel;
                //var_dump($userModel);
                $emailExist = $employeurModel->findOneByEmail($email);
                if($emailExist == false){
                       $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /main');
                    exit;
                }
               //$passwordExist = $userModel->findOneByPassword($password);
                //$passwordExist = $emailExist->findOneByLogin($login);
                //var_dump($passwordExist);
                $pass= $emailExist->motdepasse;
               // var_dump($pass);
                //die;
               //var_dump($passwordExist->password);
               //var_dump($password);
                //var_dump($passwordExist->getId());
                
               // var_dump($emailExist);
              //  var_dump($passwordExist);
               //die;
    
    
                if (!$emailExist) {
                    $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /');
                    exit;
                }
    
                $user = $employeurModel->hydrate($emailExist);
               // var_dump($user);
    
    
    
                if ($pass == $motdepasse) {
                    $user->setSession();
                    var_dump($user);
                    header('Location: /backend_employeur/');
                    exit;
                } else {
                    $_SESSION['message'] = 'Le mot de passe est incorrect';
                    header('Location: /');
                    exit;
                }
        }

      
        $this->render('main/index.php', compact('emploiRecent', 'domaine'));
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: /' );
    }

    public function jaime($id){
        $jaimeinit = new JaimeModel;
        $jaimevalue = $jaimeinit->findjaime($id, $_SESSION["user"]['id']);
        if($jaimevalue){
           
            $jaimeinit->delete($jaimevalue->id);
        }else{
            echo "merci";
            //$jaimeinit = $jaimeinit->find()
            //var_dump($jaime);
            //die;
            $newdate = new DateTime();
            $newdate = $newdate->format("Y-m-d H:i:s");
            $jaime = new JaimeModel;
            $jaime->setLikeoffre(1)
                  ->setDateheurejaime($newdate)
                  ->setId_candidat($_SESSION["user"]['id'])
                  ->setId_offre($id)
                  ;
                  // var_dump($jaime);
                  $jaime->createOne();
        }
        
    }
    

   /*  public function actualite(){
        $this->render('main/actualite.php', [], 'home.php');
    } */

    /* public function merci($params)
    {
        var_dump($params);
        echo 'ceci est la foonction merci';
    } */
}
