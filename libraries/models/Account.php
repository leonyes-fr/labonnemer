<?php

namespace Models;
require_once('libraries/autoload.php');

class Account extends Model {

    protected $table = "customer";

    public function  findallOrders($customerId){
        $query = $this->pdo->prepare("SELECT * FROM cart WHERE car_cust_id = :car_cust_id");
        $query->execute(['car_cust_id' => $customerId]);
        $orders = $query->fetchAll();
        return $orders;
    }

    // Fonction permettant au client de mettre lui même à jour ses coordonnées.
    public function updateuser(array $variables = []){
        extract($variables);
        $update = $this->pdo->prepare('UPDATE customer SET cust_lastname = :lastname, cust_firstname = :firstname, cust_email = :email, cust_address = :address, cust_phone = :phone WHERE cust_id = :id');
        $update->execute(array('lastname'=> $lastname, 'firstname'=> $firstname, 'email'=> $email, 'address'=> $address, 'id'=> $id, 'phone'=> $phone));
        $_SESSION['user']= ['id'=>$id,'lastname'=>$lastname,'firstname'=>$firstname,'email'=>$email, 'address'=>$address, 'phone'=>$phone];
    }

    
}
