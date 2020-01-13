<?php

namespace Controllers;
require_once('libraries/autoload.php');

class Login extends Controller {

    protected $modelName = "\Models\Login";

    public function index(){
        $pageTitle = "Page de connexion";
        \Renderer::render('login', compact('pageTitle'));
    }

    public function getlogin(){
        // si post alors logé la session. exemple:

        if(array_key_exists('login',$_POST))
        {
            $errors[] = 'Erreur! Login ou mot de passe non valide.';
            $email = $_POST['login'];
    
            $db = connexion();
            $login = $db->prepare ('SELECT * FROM users WHERE email = :email ');
            $login->execute(array('email'=>$_POST['login']));
            $user = $login->fetch();
                $isPasswordCorrect = password_verify($_POST['password'], $user['password']);
                if ($isPasswordCorrect) 
                {
                    $_SESSION['connected']= true;
                    $_SESSION['user']= ['id'=>$user['id_user'],'username'=>$user['username'],'email'=>$user['email'], 'role'=>$user['role']];
    
                    header('Location: index.php');
                    exit();
                }
        }
    }

}