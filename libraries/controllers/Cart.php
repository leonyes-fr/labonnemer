<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Cart extends Controller {

    protected $modelName = "\Models\Cart";
    
    public function index(){
        $pageTitle = "Panier";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        $initCart = $this->initCart;
        \Renderer::render('cart', compact('pageTitle', 'accountName', 'disconnect', 'initCart'));
    }

    public function addproduct(){
        
        var_dump($_POST['listproducts']);
        $result = json_decode($_POST['listproducts']);
        var_dump($result);
        die();
        $pageTitle = "Panier";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        \Renderer::render('cart', compact('pageTitle', 'accountName', 'disconnect'));
    }

}