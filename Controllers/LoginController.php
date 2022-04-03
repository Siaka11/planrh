<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\candidatmodel;
use App\Models\EmployeurModel;


class LoginController extends Controller{

    public function index(){
        //echo "merci"; 

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
                    $_SESSION['message'] = 'Le mot de passe est incorrect';
                    header('Location: /login');
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
                var_dump($emailExist);
                if($emailExist == false){
                       $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                    header('Location: /login');
                    exit;
                }
               //$passwordExist = $userModel->findOneByPassword($password);
                //$passwordExist = $emailExist->findOneByLogin($login);
                //var_dump($passwordExist);
                $pass= $emailExist->motdepasse;
                var_dump($pass);
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
        $this->render("main/login.php", [], 'login.php');
    }
}

