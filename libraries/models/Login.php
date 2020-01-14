<?php

namespace Models;
require_once('libraries/autoload.php');

class Login extends Model {

    protected $table = "customer";

    public function getlogin(array $variables = []){
        $status;
        extract($variables);
        $login = $this->pdo->prepare ('SELECT * FROM customer WHERE cust_email = :email ');
        $login->execute(array('email'=>$_POST['email']));
        $user = $login->fetch();
            $isPasswordCorrect = password_verify($password, $user['cust_password']);
            if ($isPasswordCorrect) 
            {
                $_SESSION['connected']= true;
                $_SESSION['user']= ['id'=>$user['cust_id'],'lastname'=>$user['cust_lastname'],'firstname'=>$user['cust_firstname'],'email'=>$user['cust_email'], 'address'=>$user['cust_address'], 'phone'=>$user['cust_phone']];
                $status = "ok";
            }else{
                $status = "false";
            }
            return $status;
    }

}
