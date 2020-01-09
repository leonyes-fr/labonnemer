<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Products extends Controller {

    protected $modelName = "\Models\Products";

    //Lance une page produit avec tt les produits.
    public function list(){
        // Affichage
        $products = $this->model->findAllByCategory($_GET['category']);
        $pageTitle = "Produits";
        \Renderer::render('products', compact('pageTitle', 'products'));
    }


}