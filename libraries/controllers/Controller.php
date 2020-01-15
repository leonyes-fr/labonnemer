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

    public function status(){
       
        if(isset($_SESSION['connected']) && $_SESSION['connected']== true){
            $this->accountName = '<a href="index.php?controller=account">Votre compte: '. $_SESSION['user']['firstname'] . '</a>';
            $this->disconnect = '<a href="index.php?controller=account&task=disconnect">Se deconnecter</a>';
        }else{
            $this->accountName = '<a href="index.php?controller=login">Compte</a>';
            $this->disconnect ='';
        }
    }

    public function cartlogged(){
       
        if(isset($_SESSION['connected']) && $_SESSION['connected']== true){
            $this->initCart = '<input type="submit" value="simuler le paiement">';
        }else{
            $this->initCart = '<a href="index.php?controller=login">Créer votre compte pour continuer </a>';
        }
    }

}