<?php

namespace Models;
require_once('libraries/autoload.php');

class Create extends Model {

    protected $table = "customer";

    //On controle que l'email d'inscription ne soit pas déja existante en bdd pour éviter les doublons.
    function controlUsername($customerEmail)
    {
        $selec = $this->pdo->prepare ('SELECT * FROM customer WHERE cust_email = ?');
        $selec->execute(array($customerEmail));
        $data = $selec->fetch();
            if( $data['cust_email'] == $customerEmail)
            {
                $userExist = true;
            }else
            {
                $userExist = false;
            }
        return $userExist;
    }
    
    //Après les controles d'usage, on peux enregistrer le nouveau compte d'un client.
    public function adduser(array $variables = []) {
        extract($variables);
        $insert = $this->pdo->prepare('INSERT INTO customer(cust_lastname, cust_firstname, cust_email, cust_password, cust_address, cust_phone) VALUES(:lastname,:firstname,:email,:password, :address, :phone) ');
        $insert->execute(array('lastname'=>$lastname, 'firstname'=>$firstname,'email'=>$email, 'password'=>$password, 'address'=>$address, 'phone'=>$phone)); 
    }
   
}
