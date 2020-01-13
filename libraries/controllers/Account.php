<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Account extends Controller {

    protected $modelName = "\Models\Account";

    public function index(){
        //Penser a faire un controle de sessions = true pour éviter gruge.
        $pageTitle = "Votre compte";
        $accountName = $this->accountName;
        $disconnect = $this->disconnect;
        \Renderer::render('account', compact('pageTitle', 'disconnect', 'accountName'));
    }

    public function disconnect(){
        $_SESSION['connected'] = false;
        \Http::redirect("index.php");
    }

}