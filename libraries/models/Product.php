<?php

namespace Models;
require_once('libraries/autoload.php');

class Product extends Model {

    protected $table = "product";

    //Retourne un produit en particulier et affiche ses caractéristiques dans la page produit.
    public function findOne(int $product) {
        $query = $this->pdo->prepare("SELECT * FROM product WHERE prod_id = :prod_id");
        $query->execute(['prod_id' => $product]);
        $product = $query->fetch();
        return $product;
    }

   

}
