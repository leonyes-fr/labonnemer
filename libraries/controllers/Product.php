<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Product extends Controller {

    protected $modelName = "\Models\Product";

    //Lance une page produit avec tt les produits.
    public function find(){
        // Affichage
        $product = $this->model->findOne($_GET['id']);
        $pageTitle = "Produit";
        \Renderer::render('product', compact('pageTitle', 'product'));
    }


}