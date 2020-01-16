<?php

namespace Controllers;

require_once('libraries/autoload.php');

//Home est le controller lancé par défaut, "index" la méthode de base également. tout hérite d'un modéle "controller"
class Home extends Controller {

    protected $modelName = "\Models\Home";

    //Lance la premiére page d'accueil du site sur le template index.html.php
    public function index(){
        //AccountName et disconnect sont nécessaire au header, pour afficher visiblement le statut connecté ou non du client.
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        $pageTitle = "Accueil";
        
        \Renderer::render('index', compact('pageTitle', 'disconnect', 'accountName'));
    }


}