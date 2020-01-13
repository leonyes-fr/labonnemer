<?php

namespace Controllers;
session_start();
abstract class Controller {

    protected $model;
    protected $modelName;
    protected $sessionStatus;
    protected $accountName;
    protected $disconnect;

    //A l'appel de la classe mére abstraite Controller, se lance automatiquement la fonction construct qui va instancier la classe modele correspondante au controller invoquer. 
    public function __construct(){
        $this->model = new $this->modelName();
        $this->status();
    }

    public function status(){
        if($_SESSION['connected']== true){
            $this->accountName = '<a href="index.php?controller=account">Bienvenue '. $_SESSION['user']['firstname'] . '</a>';
            $this->disconnect = '<a href="index.php?controller=account&task=disconnect">Se deconnecter</a>';
        }else{
            $this->accountName = '<a href="index.php?controller=login">Compte</a>';
            $this->disconnect ='';
        }
    }

}