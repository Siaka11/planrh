<?php

namespace App\fr\Controllers;


use App\fr\Controllers\Controller;

class ContactController extends Controller{

    public function index(){

        $this->render('main/contact.php', []);
    }
}