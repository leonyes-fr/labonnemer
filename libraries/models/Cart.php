<?php

namespace Models;
require_once('libraries/autoload.php');

class Cart extends Model {

    protected $table = "cart";

    // Controle que le prix dans le localstorage n'as pas était modifié par un petit futé.
    public function checkprice($product , $price){
        $query = $this->pdo->prepare("SELECT * FROM product WHERE prod_id = :prod_id");
        $query->execute(['prod_id' => $product]);
        $product = $query->fetch();
        if($price == $product['prod_price']){
            return true;
        }
        return false;
    }
   
    public function addcart(array $variables = []) {
        extract($variables);
        $insert = $this->pdo->prepare('INSERT INTO cart(car_cust_id, car_prod_id, car_prod_quantity, car_prod_price, car_status) VALUES(:user,:product,:quantity,:price,:status) ');
        $insert->execute(array('user'=>$user, 'product'=>$product, 'quantity'=>$quantity, 'price'=>$price, 'status'=>"Valider")); 
    }

}
