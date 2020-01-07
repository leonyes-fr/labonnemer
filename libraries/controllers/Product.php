<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Product extends Controller {

    protected $modelName = "\Models\Product";

    //Lance une page produit avec tt les produits.
    public function list(){
        // Affichage
        $products = $this->model->findAll();
        $pageTitle = "Produits";
        \Renderer::render('products', compact('pageTitle', 'products'));
    }


}