<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Login extends Controller {

    protected $modelName = "\Models\Login";
    public function index(){
        $pageTitle = "Accueil";
        \Renderer::render('login', compact('pageTitle'));
    }

}