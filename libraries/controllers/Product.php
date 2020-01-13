<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Product extends Controller {

    protected $modelName = "\Models\Product";

    //Lance la page produit avec le produit passé en chaine de requete.
    public function find(){
        $product = $this->model->findOne($_GET['id']);
        $pageTitle = "Produit ". $product['prod_name'];
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        \Renderer::render('product', compact('pageTitle','accountName', 'disconnect', 'product'));
    }


}