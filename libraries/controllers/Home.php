<?php

namespace Controllers;

require_once('libraries/autoload.php');


class Home extends Controller {

    protected $modelName = "\Models\Home";

    //Lance la premiére page d'accueil du site sur le template index.html.php
    public function index(){
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        $pageTitle = "Accueil";
        
        \Renderer::render('index', compact('pageTitle', 'disconnect', 'accountName'));
    }


}