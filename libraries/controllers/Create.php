<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Create extends Controller {

    protected $modelName = "\Models\Create";
    public function index(){
        $pageTitle = "Création d'un nouveau compte.";
        \Renderer::render('create', compact('pageTitle'));
    }

    public function adduser() {
        $this->model->adduser();
        $pageTitle = "Accueil";
        \Renderer::render('index', compact('pageTitle'));
        }

}