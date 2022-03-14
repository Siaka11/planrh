<?php


namespace App\Controllers;

abstract class Controller
{

    public function render(string $fichier, array $donnees = [], string $template = 'home.php')
    {

        extract($donnees);

        ob_start();
        //var_dump($fichier);
        require_once '../Views/' . $fichier;
        $contenu = ob_get_clean();
       
        //var_dump($contenu);

        require_once  '../Views/' . $template;
    }
}
