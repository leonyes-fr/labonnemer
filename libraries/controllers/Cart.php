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
        // On va avoir besoin d'instancier  Account afin de bénéficier de ses fonctions après la validation du panier.
        $this->model = new $this->modelName();
        $account = new \Models\Account;
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
        $orders= $account->findAllOrders($_SESSION['user']['id']);
        $totalOrder= $account->sumAllOrders($_SESSION['user']['id']);
            if($totalOrder[0]['SUM(car_prod_price * car_prod_quantity)'] == null){
                $sumOrder="Vous n'avez pas de commandes en cours.";
            }else{
                $sumOrder= 'Le prix total de la commande en cours de traitement est de ' . $totalOrder[0]['SUM(car_prod_price * car_prod_quantity)'] . ' Euros';
            }
        \Renderer::render('account', compact('pageTitle', 'accountName', 'disconnect', 'orders', 'sumOrder'));
    }

}