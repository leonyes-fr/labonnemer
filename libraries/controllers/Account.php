<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Account extends Controller {

    protected $modelName = "\Models\Account";

    public function index(){
        if($_SESSION['connected'] == true){
            $pageTitle = "Votre compte";
            $accountName = $this->accountName;
            $disconnect = $this->disconnect;
            \Renderer::render('account', compact('pageTitle', 'disconnect', 'accountName'));
        }else{
            \Http::redirect("index.php"); 
        }
        
    }

    //Permet à un client, après quelque controles d'usage, de mettre à jour ses coordonnées.
    public function updateuser(){
        $errors= [];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $id = $_SESSION['user']['id'];
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;

        if($_POST['lastname'] == NULL){
            $errors[] = 'Erreur! Le champ Nom de famille est vide !';
        }

        if($_POST['firstname'] == NULL){
            $errors[] = 'Erreur! Le champ Prénom est vide !';
        }

        if($_POST['email'] == NULL){
            $errors[] = 'Erreur! Le champ email est vide !';
        }

        if($_POST['address'] == NULL){
            $errors[] = 'Erreur! Le champ Adresse est vide !';
        }

        if($_POST['phone'] == NULL){
            $errors[] = 'Erreur! Le champ Telephone est vide !';
        }

        if(count($errors) == 0){
            $this->model->updateuser(compact('id','lastname','firstname', 'email', 'address', 'phone'));
            $pageTitle = "Votre compte.";
            
            \Renderer::render('index', compact('pageTitle', 'accountName', 'disconnect'));
        }else{
            $pageTitle = "Erreur dans la modification de votre compte.";
            \Renderer::render('account', compact('pageTitle', 'errors','accountName', 'disconnect'));
        }
    }
    
    public function disconnect(){
        $_SESSION['connected'] = false;
        \Http::redirect("index.php");
    }

}