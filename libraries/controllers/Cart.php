<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Cart extends Controller {

    protected $modelName = "\Models\Cart";
    
    public function index(){
        $pageTitle = "Panier";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        $initCart = $this->initCart; //statut connecté ou non du client.
        \Renderer::render('cart', compact('pageTitle', 'accountName', 'disconnect', 'initCart'));
    }

    // Fonction qui va dans un premier temps controllé que les prix du localstorage correspondent a la bdd, puis persister les données dans la table cart.
    public function addproduct(){
        $cartList = json_decode($_POST['listproducts']);
        foreach($cartList as $singleProduct){
            // checkprice vérifie que le prix venant du localstorage n'as pas était modifié sur l'ordi client.
            if ($this->model->checkprice( $singleProduct->product ,$singleProduct->price)){
                //Si le prix n'as pas était "piraté", on peux save le produit dans le panier bdd.
                $user = $_SESSION['user']['id'];
                $product = $singleProduct->product;
                $quantity = $singleProduct->quantity;
                $price = $singleProduct->price;
                $this->model->addcart(compact('user','product', 'quantity', 'price'));
            }
        }
        $pageTitle = "Votre compte";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        //rajouter les commandes en cours.
        \Renderer::render('account', compact('pageTitle', 'accountName', 'disconnect'));
    }

}