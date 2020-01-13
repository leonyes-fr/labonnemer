<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Create extends Controller {

    protected $modelName = "\Models\Create";

    //Lance la page de création de compte.
    public function index(){
        $pageTitle = "Création d'un nouveau compte.";
        \Renderer::render('create', compact('pageTitle'));
    }

    //Va rajouter un nouvel utilisateur en bdd via le modele correspondant (create).
    public function adduser() {
        $this->model->adduser();
        $pageTitle = "Création d'un nouveau compte.";
        \Renderer::render('index', compact('pageTitle'));
        }

}