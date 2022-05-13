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
        'y' => 'year',
        'm' => 'month',
        'w' => 'sem',
        'd' => 'j',
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
    return $string ? implode(' ', $string) . '' : 'maintenant';
    }

}