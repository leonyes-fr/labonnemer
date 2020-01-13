<?php

namespace Controllers;
require_once('libraries/autoload.php');


class Login extends Controller {

    protected $modelName = "\Models\Login";

    public function index(){
        $pageTitle = "Page de connexion";
        $error = "";
        \Renderer::render('login', compact('pageTitle', 'error'));
    }

    public function getlogin(){
        // si post alors logé la session. exemple:

        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $statusLogin = $this->model->getlogin(compact('email', 'password'));
            if($statusLogin == "ok"){
                $pageTitle = "Page d'accueil";
                \Renderer::render('index', compact('pageTitle'));
            }else{
                $error = "Erreur! Login ou mot de passe non valide.";
                $pageTitle = "Page de connexion";
                \Renderer::render('login', compact('pageTitle', 'error'));
            }
            
        }else{
            $error = "Erreur! Champs manquants !";
            $pageTitle = "Page de connexion";
            \Renderer::render('login', compact('pageTitle', 'error'));
        }
        
    }

}
