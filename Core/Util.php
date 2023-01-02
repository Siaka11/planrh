<?php

namespace App\Core;

class Util {

    public static function red(){
        
        header('Location: /');
    }
    // Separer les mots avec une limite d'affichage
    public function seperate($texte){

        $array = explode(" ", $texte);
        //var_dump($array[0]);
        if(count($array) >= 2){
            $oneElement = $array[0]."...";
        }else{
            $oneElement = $array[0];
        }
        
        return $oneElement;
    }

    public function mydateago($date, $full = true){

    $now = new \DateTime;
    $ago = new \DateTime($date);
    $diff = (array) $now->diff($ago);

    $diff['w'] = floor($diff['d'] / 7);
    $diff['d']  -= $diff['w'] * 7;

    $string = array(
        'y' => 'annee',
        'm' => 'mois',
        'w' => 'sem',
        'd' => 'jr',
        //'h' => 'hour',
        //'i' => 'minute',
        //'s' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff[$k]) {
            $v = $diff[$k] . ' ' . $v . ($diff[$k] > 1 ? '' : '');
        } else {
            unset($string[$k]);
        }
    }

    
    //var_dump($string);
    $full = false;
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(' ', $string) . '' : 'Aujourd\'hui';
    }

    public static function uploader($info){

      if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
          $tailleMax = 5097152;
          $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
          if($_FILES['avatar']['size'] <= $tailleMax) {
             $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
             if(in_array($extensionUpload, $extensionsValides)) {
                $ectensionrecommended = "png";
                $chemin = "../public_html/images/".$info.".".$ectensionrecommended;
                //var_dump($_FILES['avatar']['tmp_name']);
                //die;
                $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                if($resultat) {
                  echo "Image mise à hour avec succès";
                  //  $candidatmodel = new CandidatModel;
                  //              $candidatmodel->setId($_SESSION['user']['id'])
                  //                            ->setImage($info.".".$extensionUpload);
                  //              $candidatmodel->update();
                                            

               //     var_dump($resultat);
               //     die;
               //    $updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
               //    $updateavatar->execute(array(
               //       'avatar' => $_SESSION['id'].".".$extensionUpload,
               //       'id' => $_SESSION['id']
               //       ));
                 // header('Location: /backend_candidat');
                } else {
                   $msg = "Erreur durant l'importation de votre photo de profil";
                }
             } else {
                $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
             }
          } else {
             $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
          }
       }
    }

    public static function uploadervideo($info){
        //die('enter');
        //var_dump($_FILES['avatar']);die;
        if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
            $tailleMax = 50000000;
            //video/mp4
            $extensionsValides = array('mp4');
            if($_FILES['avatar']['size'] <= $tailleMax) {
                $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                if(in_array($extensionUpload, $extensionsValides)) {
                $ectensionrecommended = "mp4";
                $chemin = "../public_html/videos/".$info.".".$ectensionrecommended;
                //var_dump($_FILES['avatar']['tmp_name']);
                //die;
                $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                if($resultat) {
                    echo "image uplaoder with succes";
                    //  $candidatmodel = new CandidatModel;
                    //              $candidatmodel->setId($_SESSION['user']['id'])
                    //                            ->setImage($info.".".$extensionUpload);
                    //              $candidatmodel->update();
                                                

                //     var_dump($resultat);
                //     die;
                //    $updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
                //    $updateavatar->execute(array(
                //       'avatar' => $_SESSION['id'].".".$extensionUpload,
                //       'id' => $_SESSION['id']
                //       ));
                    // header('Location: /backend_candidat');
                } else {
                    $msg = "Erreur durant l'importation de votre photo de profil";
                }
                } else {
                $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
                }
            } else {
                $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
            }
        }
    }

}