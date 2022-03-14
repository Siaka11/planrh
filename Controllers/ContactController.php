<?php
namespace App\Controllers;
use App\Controllers;

class ContactController extends Controller{

    public function index(){

        $this->render('main/contact.php', []);
    }
}