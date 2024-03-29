<?php

use App\Core\Main;
use App\Autoloader;
use App\Core\Router;
use App\Models\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



define('ROOT', dirname(__DIR__));
require_once "../vendor/autoload.php";
//require ROOT . '/vendor/autoload.php';

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';



require_once "../Autoloader.php";
Autoloader::register();

$main = new Main();
$main->start();
