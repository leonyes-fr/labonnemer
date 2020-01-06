<?php 

class Database {

    private static $instance = null;

    /**
     *  Retourne une connexion à la base de données. Avec utilisation du pattern Singleton.
     * 
     * @return PDO
     */
    public static function getPdo(): PDO 
    {
        // self permet d appeler la variable au sein de l'objet quand la propriété est static...
        if(self::$instance === null)
        {
            self::$instance = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        return self::$instance;
    }

       
}
