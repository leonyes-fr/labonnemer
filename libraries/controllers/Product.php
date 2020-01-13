<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Product extends Controller {

    protected $modelName = "\Models\Product";

    //Lance la page produit avec le produit passé en chaine de requete.
    public function find(){
        $product = $this->model->findOne($_GET['id']);
        $pageTitle = "Produit ". $product['prod_name'];
        $user = $this->status();
        \Renderer::render('product', compact('pageTitle','user', 'product'));
    }


}