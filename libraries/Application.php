<?php

//Voici l'aiguilleur principal du site.
class Application {

    public static function process()
    {
        $controllerName = "Home";  //Le controlleur appelé, Home par défaut au lancement du site.
        $task = "index";              // La tâche/requete appelé, index par défaut.

        if(!empty($_GET['controller'])) {
            //exemple :  GET => login deviendra Login grace a ucfirst. Afin de taper dans la classe controlleur qui commence par une maj.
            $controllerName = ucfirst($_GET['controller']);
        }

        if(!empty($_GET['task'])) {
            // la superglobale GET task va s affecter a $task. cela correspondra à l'action à effectuer/ méthode à lancer...
            $task = $_GET['task'];
        }

        $controllerName = "\Controllers\\" . $controllerName;  //double backslash pour "échapper"

        //Enfin,  on instancie le controlleur voulue (sa classe) et on appel -> la méthode désiré par l'utilisateur.
        $controller = new $controllerName();
        $controller->$task();
    }
}