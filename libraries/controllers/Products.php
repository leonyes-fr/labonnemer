<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Products extends Controller {

    protected $modelName = "\Models\Products";

    //Lance une page produits avec tt les produits de la catégorie choisis.
    public function list(){
        $products = $this->model->findAllByCategory($_GET['category']);
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        $pageTitle = "Liste des produits";
        \Renderer::render('products', compact('pageTitle','accountName', 'disconnect', 'products'));
    }


}