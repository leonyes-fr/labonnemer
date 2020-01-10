<?php

namespace Models;

require_once('libraries/autoload.php');

class Products extends Model {

    protected $table = "product";

    public function findOne(int $article_id) : array{
        $query = $this->pdo->prepare("SELECT * FROM product WHERE article_id = :article_id");
        $query->execute(['article_id' => $article_id]);
        $commentaires = $query->fetchAll();
        return $commentaires;
    }

   

}
