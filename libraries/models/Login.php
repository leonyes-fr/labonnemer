<?php

namespace Models;

require_once('libraries/autoload.php');

class Login extends Model {

    protected $table = "customer";

    public function findOne(int $product) {
        $query = $this->pdo->prepare("SELECT * FROM product WHERE prod_id = :prod_id");
        $query->execute(['prod_id' => $product]);
        $product = $query->fetch();
        return $product;
    }

   

}
