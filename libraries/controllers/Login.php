<?php

namespace Controllers;
require_once('libraries/autoload.php');


class Login extends Controller {

    protected $modelName = "\Models\Login";
    // Comme toujours, la méthode "index" ouvre la page "par défaut de login"
    public function index(){
        $pageTitle = "Page de connexion";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        $error = "";
        \Renderer::render('login', compact('pageTitle', 'error', 'disconnect', 'accountName'));
    }

    //La fonction getlogin controle que l'adresse mail et le mot de passe fourni existe en bdd.
    public function getlogin(){
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            //On interroge le modéle, si retourne "ok" le client est loggé.
            $statusLogin = $this->model->getlogin(compact('email', 'password'));
            if($statusLogin == "ok"){
                \Http::redirect("index.php");
            }else{
                $error = "Erreur! Login ou mot de passe non valide.";
                $pageTitle = "Page de connexion";
                $accountName = $this->accountName;
                $disconnect = $this->disconnect;
                \Renderer::render('login', compact('pageTitle', 'error', 'disconnect', 'accountName'));
            }
            
        }else{
            $error = "Erreur! Champs manquants !";
            $pageTitle = "Page de connexion";
            \Renderer::render('login', compact('pageTitle', 'error','disconnect', 'accountName'));
        }
    }


}
