<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Create extends Controller {

    protected $modelName = "\Models\Create";

    //Lance la page de création de compte.
    public function index(){
        $pageTitle = "Création d'un nouveau compte.";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        $errors= [];
        \Renderer::render('create', compact('pageTitle', 'errors', 'accountName', 'disconnect'));
    }

    //Va rajouter un nouvel utilisateur en bdd via le modele correspondant (create). htmlspecialchars protege des failles xss.
    public function adduser() {
        $errors= [];
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $phone = htmlspecialchars($_POST['phone']);
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        //série de controles de données avant leur persistance dans la table customer.
        if($_POST['password'] != $_POST['controlpassword']){
            $errors[] = 'Erreur! les champs mot de passe ne sont pas identiques !';
        }

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
        //On controle que l'adresse mail qui servira de login n'existe pas déja en bdd. Si renvoie true on peux continuer.
        if($this->model->controlUsername( $email)){
            $errors[] = 'Erreur! Cette adresse email est indisponible !';
        } 
        //Si pas d'erreurs, on aoute le nouveau client.
        if(count($errors) == 0)
        {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->model->adduser(compact('lastname','firstname', 'password', 'email', 'address', 'phone'));
        $pageTitle = "Création d'un nouveau compte.";
        \Renderer::render('index', compact('pageTitle', 'errors', 'accountName', 'disconnect'));
        }else{
            $pageTitle = "Erreur dans la création du compte.";
            \Renderer::render('create', compact('pageTitle', 'errors', 'accountName', 'disconnect'));
        }
    }

       

}