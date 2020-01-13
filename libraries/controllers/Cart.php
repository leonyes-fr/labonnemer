<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Cart extends Controller {

    protected $modelName = "\Models\Cart";
    
    public function index(){
        $pageTitle = "Panier";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        \Renderer::render('cart', compact('pageTitle', 'accountName', 'disconnect'));
    }

}