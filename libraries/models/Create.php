<?php

namespace Models;
require_once('libraries/autoload.php');

class Create extends Model {

    protected $table = "customer";

    public function adduser(array $variables = []) {
        extract($variables);
        $insert = $this->pdo->prepare('INSERT INTO customer(cust_lastname, cust_firstname, cust_email, cust_password, cust_address, cust_phone) VALUES(:lastname,:firstname,:email,:password, :address, :phone) ');
        $insert->execute(array('lastname'=>$lastname, 'firstname'=>$firstname,'email'=>$email, 'password'=>$password, 'address'=>$address, 'phone'=>$phone)); 
    }
   
}
