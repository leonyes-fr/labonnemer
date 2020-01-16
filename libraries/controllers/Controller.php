<?php

namespace Controllers;
session_start();
abstract class Controller {

    protected $model;
    protected $modelName;
    protected $sessionStatus;
    protected $accountName;
    protected $disconnect;
    protected $initCart;
    
    //A l'appel de la classe mére abstraite Controller, se lance automatiquement la fonction construct qui va instancier la classe modele correspondante au controller invoqué. 
    public function __construct(){
        $this->model = new $this->modelName();
        $this->status();
        $this->cartlogged();
    }

    // Si utilisateur connecté, affiche son nom et deux liens: Manager son compte, ou se déconnecter. Sinon lien pour crée un compte.
    public function status(){
        if(isset($_SESSION['connected']) && $_SESSION['connected']== true){
            $this->accountName = '<a href="index.php?controller=account">Votre compte: '. $_SESSION['user']['firstname'] . '</a>';
            $this->disconnect = '<a href="index.php?controller=account&task=disconnect">Se deconnecter</a>';
        }else{
            $this->accountName = '<a href="index.php?controller=login">Compte</a>';
            $this->disconnect ='';
        }
    }

    //Si utilisateur connecté, on peux procéder au paiement, sinon propose lien création d'un compte.
    public function cartlogged(){
        if(isset($_SESSION['connected']) && $_SESSION['connected']== true){
            $this->initCart = '<input type="submit" id="validatecart" value="simuler le paiement">';
        }else{
            $this->initCart = '<a href="index.php?controller=login">Créer votre compte pour continuer </a>';
        }
    }

}