<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Product extends Controller {

    protected $modelName = "\Models\Product";

    //Lance la premiére page d'acceuil du site sur le template index.html.php
    public function list(){
        // Affichage
        $products = $this->model->findAll();
        $pageTitle = "Produits";
        \Renderer::render('product', compact('pageTitle', 'products'));
    }


}