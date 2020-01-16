<?php

namespace Models;
require_once('libraries/autoload.php');

class Products extends Model {

    protected $table = "product";

    /**
    * retourne la liste d'une catégorie de produits pour affichage dans la vue.
    * 
    * @return array
    */
    public function findAllByCategory(int $category)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE prod_category = :prod_category");
        $query->execute(['prod_category' => $category]);
        $items = $query->fetchAll();
        return $items;
    }

}
