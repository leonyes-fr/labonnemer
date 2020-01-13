<?php

namespace Controllers;
session_start();
abstract class Controller {

    protected $model;
    protected $modelName;
    protected $sessionStatus;
    
    //A l'appel de la classe mére abstraite Controller, se lance automatiquement la fonction construct qui va instancier la classe modele correspondante au controller invoquer. 
    public function __construct(){
        $this->model = new $this->modelName();
    }

    public function status(){
        if($_SESSION['connected']== true){
            $user = $_SESSION['user'];
        }else{
            $user = "";
        }
        return $user;
    }

}