<?php

namespace Models;

require_once('libraries/autoload.php');

class Create extends Model {

    protected $table = "customer";

    public function findOne(int $product) {
        $query = $this->pdo->prepare("SELECT * FROM product WHERE prod_id = :prod_id");
        $query->execute(['prod_id' => $product]);
        $product = $query->fetch();
        return $product;
    }

    public function adduser() {

    $insert = $this->pdo->prepare('INSERT INTO customer(cust_email,cust_password) VALUES(?,?) ');
    $insert->execute(array($_POST['email'], $_POST['password']));
    }
   

}
