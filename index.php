<?php

/**
 * CE FICHIER AFFICHE LA PAGE D'ACCUEIL !
 */

// Le require_once va déclencher la fonction d'autoload pour charger les classes requises automatiquement.
 require_once('libraries/autoload.php');

 // Process lance la méthode statique d'éguillage en fonction de la chaine de requete dans la classe application dans le répertoire libraries.
 \Application::process();