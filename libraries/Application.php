<?php

//Voici l'aiguilleur principal du site.
class Application {

    public static function process()
    {
        $controllerName = "Article";  // Ou taper comme controlleur.
        $task = "index";              // Ou taper comme requete/tâche.

        if(!empty($_GET['controller'])) {
            //exemple :  GET => article deviendra Article grace a ucfirst. Afin de taper dans la classe controlleur qui commence par une maj.
            $controllerName = ucfirst($_GET['controller']);
        }

        
        if(!empty($_GET['task'])) {
            // la superglobale GET task va s affecter a $task. cela correspondra à l'action à effectuer/ méthode à lancer...
            $task = $_GET['task'];
        }


        $controllerName = "\Controllers\\" . $controllerName;  //double backslash pour "échapper"

        //Enfin,  on instancier le controlleur voulue (sa classe) et on -> sa méthode désiré par l'utilisateur.
        $controller = new $controllerName();
        $controller->$task();
    }
}