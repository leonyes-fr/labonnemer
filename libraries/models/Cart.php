<?php

namespace Models;

require_once('libraries/autoload.php');

class Cart extends Model {

    protected $table = "cart";

    public function findOne(int $product) {
        $query = $this->pdo->prepare("SELECT * FROM cart WHERE prod_id = :prod_id");
        $query->execute(['prod_id' => $product]);
        $product = $query->fetch();
        return $product;
    }

   

}
