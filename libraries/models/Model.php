<?php

namespace Models;

abstract class Model 
{
    protected $pdo;
    protected $table;

    // A l'appel du constructeur de la classe mére Model, on lance une unique instance de PDO.
    public function __construct()
    {
        $this->pdo = \Database::getPdo();
    }

    /**
    * retourne la liste compléte des produits classés par date de création. Non usité pour l'instant. Il s'agit de test d'apres tutos rencontrés...
    * 
    * @return array
    */
    public function findAll(?string $order = "") : array 
    {
        $sql="SELECT * FROM {$this->table}";
        
        if($order){
            $sql .= " ORDER BY " . $order;
        }

        $resultats = $this->pdo->query($sql);
        $item = $resultats->fetchAll();
        return $item;
    }




}