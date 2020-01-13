<?php

namespace Models;
require_once('libraries/autoload.php');

class Create extends Model {

    protected $table = "customer";

    public function adduser() {
        $insert = $this->pdo->prepare('INSERT INTO customer(cust_email,cust_password) VALUES(?,?) ');
        $insert->execute(array($_POST['email'], $_POST['password']));
    }
   

}
