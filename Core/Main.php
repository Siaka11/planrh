<?php






namespace App\Core;

use App\Controllers\MainController;


class Main
{
    public function start()
    {
       session_start();
        // On rétire le trailing slash

        // $uri = $_SERVER['REQUEST_URI'];

        // //var_dump(substr("abcdef", 0, 3));

        // if (!empty($uri) && $uri != '/' && $uri[-1] === "/") {
        //     //on enlève le slash
        //     $uri = substr($uri, 0, -1);

        //     http_response_code(301);
        //     header('Location: ' . $uri);
        // }
        // On récupère l'adresse
        $uri = $_SERVER['REQUEST_URI'];

        // On vérifie si elle n'est pas vide et si elle se termine par un /
        if (!empty($uri) && $uri != '/' && $uri[-1] === '/') {
            // Dans ce cas on enlève le /
            $uri = substr($uri, 0, -1);

            // On envoie une redirection permanente
            http_response_code(301);

            // On redirige vers l'URL dans /
            header('Location: ' . $uri);
            exit;
        }

        // On sépare les paramètres et on les met dans le tableau $params
        $params = explode('/', $_GET['p']);

        // Si au moins 1 paramètre existe
        if ($params[0] != "") {
            // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule, en ajoutant le namespace des controleurs et en ajoutant "Controller" à la fin
            $controller = '\\App\\Controllers\\' . ucfirst(array_shift($params)) . 'Controller';

            // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
            $action = isset($params[0]) ? array_shift($params) : 'index';
            // var_dump($action);

            // On instancie le contrôleur
            $controller = new $controller();

            if (method_exists($controller, $action)) {
                // Si il reste des paramètres, on appelle la méthode en envoyant les paramètres sinon on l'appelle "à vide"
                (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();
            } else {
                // On envoie le code réponse 404
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }
        } else {
            // Ici aucun paramètre n'est défini
            // On instancie le contrôleur par défaut (page d'accueil)
            $controller = new MainController();

            // On appelle la méthode index
            $controller->index();
        }

        //On gère les paramètres d'URL
        //p = controleur/methode

        // $params = explode('/', $_GET['p']);
        // // var_dump($params);
        // //var_dump($params[0]);

        // if ($params[0] != '') {
        //     // var_dump($params[1]);
        //     // On récupère le nom du controller
        //     $controller = '\\App\\Controllers\\' . ucfirst($params[0]) . 'Controller';

        //     //on instancie le controleur



        //     if (isset($controller)) {


        //         $controller = new $controller();
        //         // var_dump($controller);


        //         /////////////////
        //         if (isset($params[1])) {
        //             $action = $params[1];
        //         } else {
        //             $action = null;
        //         }
        //         // var_dump($params[1]);
        //         // var_dump($_GET['p']);
        //         //var_dump($action);


        //         if (method_exists($controller, $action)) {
        //             (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();
        //         } else {
        //             $main = new $controller;
        //             $main->index();
        //         }
        //     } else {
        //         http_response_code(404);
        //         echo 'Vous vous êtes trompés de page!';
        //     }








        //     /////////////////////


        // } else {
        //     $main = new MainController;

        //     $main->index();
        // }
    }
}
