<?php

/**
 * CE FICHIER AFFICHE LA PAGE D'ACCUEIL !
 */

// Le require_once va déclencher la fonction d'autoload pour charger les classes requises automatiquement.
 require_once('libraries/autoload.php');

 // Process lance la méthode statique d'éguillage en fonction de la chaine de requete dans la classe application dans le répertoire libraries.
 \Application::process();


 /* Inutile maintenant, c'est le process qui oriente avec par défaut un home->index
//Crée une instance de Article et lance la méthode index qui va charger la liste des articles...
 $controller = new \Controllers\Home();
 $controller->index();
 */