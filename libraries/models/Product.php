<?php

namespace Models;

require_once('libraries/autoload.php');

class Product extends Model {

    protected $table = "product";

    public function findOne(int $product) {
        $query = $this->pdo->prepare("SELECT * FROM product WHERE prod_id = :prod_id");
        $query->execute(['prod_id' => $product]);
        $product = $query->fetch();
        return $product;
    }

   

}
