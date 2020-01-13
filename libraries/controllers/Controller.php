<?php

namespace Controllers;

abstract class Controller {

    protected $model;
    protected $modelName;
    
    //A l'appel de la classe mére abstraite Controller, se lance automatiquement la fonction construct qui va instancier la classe modele correspondante au controller invoquer. 
    public function __construct(){
        $this->model = new $this->modelName();
    }

}