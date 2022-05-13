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
use App\Core\Util;

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
                    header('Location:  /backend_candidat');
                    exit;
                } else {
                    //var_dump($pass);
                    
                    $_SESSION['message'] = 'Le mot de passe est incorrect';
                    //header('Location: /');
                    //exit;
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
        if(!$_SESSION["user"]["id"]){
            $_SESSION["message"] = "Veuillez s'il vous plaît vous connecter!";
            header("Location: /");
            exit;
        }
        $jaimeinit = new JaimeModel;
        $jaimevalue = $jaimeinit->findjaime($id, $_SESSION["user"]['id']);
        echo "merci";
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
                  var_dump($jaime);
                  $jaime->createOne();
                 
        }
      
        
    }
    

   public function fetch_data(){
      
        if(isset($_POST['action'])){

            $util = new Util();
            //$domaine = new Domaine;
            $domaine = new OffreModel;

            

            if(!isset($_POST['domaine'])){
              // echo " merci error";
              // Util::red();
             ?>
                <a href="/" id="redirectlink">Actualiser <i class="fa-solid fa-arrow-rotate-left"></i></a>
             <?php
              

            }else{
                $docheck = $domaine->getAlldataFilter($_POST['domaine']);
                ?>
                <div class="row mt-4"> 
                    <?php if(isset($_SESSION["user"]["id"])): ?>
                        <?php foreach($docheck  as $emploiRecentnew):?>
                    
                            <div class="col-lg-6 col-sm-6">
                                <div class="job-list job-grid">
                                <div class="job-list-logo ">
                                    <img class="img-fluid" src="images/svg/13.svg" alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                    <div class="job-list-title">
                                        <h6><a href="#"><?=$emploiRecentnew->titre?><?=$emploiRecentnew->id ?></a></h6>
                                    </div>
                                    <div class="job-list-option">
                                        <ul class="list-unstyled">
                                        <li>
                                        <?php
                                        
                                            $employeur = new EmployeurModel;
                                            $jaime = new JaimeModel;
    
                                            $new = $employeur->find($emploiRecentnew->id_employeur);
                                            $jaime = $jaime->findjaimeAll($emploiRecentnew->id, $_SESSION["user"]["id"]);
                                        ?>
                                            
                                            <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                            <a class="job-list-company-name" href="#">Compagnie</a>
                                        </li>
                                        <li><i class="fas fa-map-marker-alt pe-1"></i><?=$emploiRecentnew->adresse ?></li>
                                        <li><i class="fas fa-filter pe-1"></i><?php
                                            //$date = new DateTime;
                                            //var_dump(mydateago("2013-05-01 00:22:35"));
                                        
                                        ?></li>
                                        <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i><?=$emploiRecentnew->typedemande  ?></a></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time" > 
                                <?php if($jaime): ?>
                                <?php foreach($jaime as $jaimeone): ?>
                                            
                                                
                                    <a class="job-list-favourite order-2 " > <i class="fas fa-heart favouritejaime"  data-id="<?=$emploiRecentnew->id ?>"></i></a>
    
                                            
                            
                                    <?php endforeach; ?>
                                
                                    <?php else:?>
                                    <a class="job-list-favourite order-2" > <i class="far fa-heart" data-id="<?=$emploiRecentnew->id ?>"></i></a>
                                    <?php endif;?>
                                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>Durée :12-05-2022</span>
                                </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    
                        <?php else: ?>    
                            <?php foreach($docheck  as $emploiRecentnew):?>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                    <div class="job-list-logo ">
                                        <img class="img-fluid" src="images/svg/13.svg" alt="">
                                    </div>
                                    <div class="job-list-details">
                                        <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h6><a href="#"><?=$emploiRecentnew->titre?><?=$emploiRecentnew->id ?></a></h6>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                            <li>
                                            <?php
                                                $employeur = new EmployeurModel;
                                                $jaime = new JaimeModel;
    
                                                $new = $employeur->find($emploiRecentnew->id_employeur);
                                                //$jaime = $jaime->findjaimeAll($emploiRecentnew->id, $_SESSION["user"]["id"]);
    
    
                                            ?>
                                                
                                                <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                                <a class="job-list-company-name" href="#">Compagnie</a>
                                            </li>
                                            <li><i class="fas fa-map-marker-alt pe-1"></i><?=$emploiRecentnew->adresse ?></li>
                                            <li><i class="fas fa-filter pe-1"></i><?php
                                                //$date = new DateTime;
                                                //var_dump(mydateago("2013-05-01 00:22:35"));
                                                $date = $util->mydateago("2022-02-10 00:22:35");
                                            
                                            $arr = $util->seperate($emploiRecentnew->secteur);
                                            echo $arr;
                                            ?></li>
                                            <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i><?=$emploiRecentnew->typedemande  ?></a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="job-list-favourite-time" > 
                                    <a class="job-list-favourite order-2" > <i class="far fa-heart" data-id="<?=$emploiRecentnew->id ?>"></i></a>
    
    
    
                                        <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>Durée : <?= $date;?></span>
                                    </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
  
  
  
          <?php
                
            }
           
            // if(isset($_POST['action'])){
            //     $docheck = $domaine->getAlldataFilter($_POST['domaine']);
            // }else{
               
            //         header('Location: /main');
                
            // }
            
       

        }else{
            header('Location: /main');
        }


    }
   
}
