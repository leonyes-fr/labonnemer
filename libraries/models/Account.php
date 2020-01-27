<?php

namespace Models;
require_once('libraries/autoload.php');

class Account extends Model {

    protected $table = "customer";

    // Va fournir à la page accompte la liste des commandes passés en cours de traitement par la société.
    public function  findAllOrders($customerId){
        $query = $this->pdo->prepare("SELECT * FROM cart INNER JOIN product ON prod_id = car_prod_id WHERE car_cust_id = :car_cust_id");
        $query->execute(['car_cust_id' => $customerId]);
        $orders = $query->fetchAll();
        return $orders;
    }

    // Va fournir à la page accompte la somme des commandes passé en cours de traitement par la société.
    public function  sumAllOrders($customerId){
        $query = $this->pdo->prepare("SELECT SUM(car_prod_price * car_prod_quantity) FROM cart WHERE car_cust_id = :car_cust_id");
        $query->execute(['car_cust_id' => $customerId]);
        $totalOrder = $query->fetchAll();
        return $totalOrder;
    }

    // Fonction permettant au client de mettre lui même à jour ses coordonnées.
    public function updateuser(array $variables = []){
        extract($variables);
        $update = $this->pdo->prepare('UPDATE customer SET cust_lastname = :lastname, cust_firstname = :firstname, cust_email = :email, cust_address = :address, cust_phone = :phone WHERE cust_id = :id');
        $update->execute(array('lastname'=> $lastname, 'firstname'=> $firstname, 'email'=> $email, 'address'=> $address, 'id'=> $id, 'phone'=> $phone));
        $_SESSION['user']= ['id'=>$id,'lastname'=>$lastname,'firstname'=>$firstname,'email'=>$email, 'address'=>$address, 'phone'=>$phone];
    }

    // Fonction permettant au client de supprimer définitivement son compte.
    public function deleteUser($customerId){
        $query = $this->pdo->prepare("DELETE FROM customer WHERE cust_id = :cust_id");
        $query->execute(['cust_id' => $customerId]);
    }
    
}
