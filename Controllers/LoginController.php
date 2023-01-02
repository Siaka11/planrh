<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\candidatmodel;
use App\Models\EmployeurModel;


class LoginController extends Controller{

    public function index(){
        //echo "merci"; 


        if(isset($_POST['connexion_candidat'])){
            //die('hello');
            $email = strip_tags($_POST['email']);
            $motdepasse = $_POST['motdepasse'];
        
            $candidatmodel = new CandidatModel;
            //var_dump($userModel);
            $emailExist = $candidatmodel->findOneByEmail($email);
            // var_dump($emailExist);
            // die;
            if(!$emailExist){
                $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                header('Location: /login');
                exit;
            }

            $pass = $emailExist->motdepasse;
            

            if(password_verify($motdepasse, $pass)){
            

                $_SESSION['user'] = [
                    'id' => $emailExist->id,
                    'nom' => $emailExist->nom,
                    'email' => $emailExist->email,
                ];

                $_SESSION['message'] = "Vous êtes connectés";
                header("Location: /Backend_candidat");
                exit;


            }else{
                $_SESSION['message'] = "Adresse mail ou mot de passe incorrect ";
                header("Location: /login");
                exit;
            }

            //$user = $candidatmodel->hydrate($emailExist);
            // var_dump($user);



            // if ($pass == $motdepasse) {
            //     $user->setSession();
            //     var_dump($user);
            //     header('Location:  /backend_candidat');
            //     exit;
            // } else {
            //     //var_dump($pass);
                
            //     $_SESSION['message'] = 'Le mot de passe est incorrect';
            //     //header('Location: /');
            //     //exit;
            // }

        }

        if(isset($_POST['connexion_employeur'])){
                
            $email = strip_tags($_POST['email']);
            $motdepasse = $_POST['motdepasse'];
       
            $employeurmodel = new EmployeurModel;
            //var_dump($userModel);
            $emailExist = $employeurmodel->findOneByEmail($email);
            // var_dump($emailExist);
            // die;
            if(!$emailExist){
                $_SESSION['message'] = 'Le login  ou le mot de passe est incorrect';
                header('Location: /login');
                exit;
            }

            $pass = $emailExist->motdepasse;
            

            if(password_verify($motdepasse, $pass)){
            

                $_SESSION['useremployeur'] = [
                    'id' => $emailExist->id,
                    'nom' => $emailExist->nom,
                    'email' => $emailExist->email,
                ];

                $_SESSION['message'] = "Vous êtes connectés";
                header("Location: /Backend_employeur");
                exit;


            }else{
                $_SESSION['message'] = "Adresse mail ou mot de passe incorrect ";
                header("Location: /login");
                exit;
            }

            //$user = $candidatmodel->hydrate($emailExist);
           // var_dump($user);



            // if ($pass == $motdepasse) {
            //     $user->setSession();
            //     var_dump($user);
            //     header('Location:  /backend_candidat');
            //     exit;
            // } else {
            //     //var_dump($pass);
                
            //     $_SESSION['message'] = 'Le mot de passe est incorrect';
            //     //header('Location: /');
            //     //exit;
            // }

        }

        $this->render("main/login.php", [], 'login.php');
    }
}

