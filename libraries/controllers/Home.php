<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Home extends Controller {

    protected $modelName = "\Models\Home";

    //Lance la premiére page d'acceuil du site sur le template index.html.php
    public function index(){
        // Affichage
        $pageTitle = "Accueil";
        \Renderer::render('index', compact('pageTitle'));
    }


}