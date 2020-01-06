<?php

/**
 * CE FICHIER A POUR BUT D'AFFICHER LA PAGE D'ACCUEIL !
 *  Le require_once va déclencher la fonction d'autoload pour charger les classes requises automatiquement.
 *  \Application::process() lance la méthode statique d'éguillage dans la classe application dans la librairies.
 */

 require_once('libraries/autoload.php');

\Application::process();

//Crée une instance de Article et lance la méthode index qui va charger la liste des articles...
 $controller = new \Controllers\Article();
 $controller->index();