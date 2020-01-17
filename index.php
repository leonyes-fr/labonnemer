<?php

/*
 *Voici la page de démarrage du site. elle va charger les élements nécessaires, puis lancer par défaut le controller Home avec la méthode index.
 */

// Le require_once va déclencher la fonction d'autoload pour charger les classes requises automatiquement.
 require_once('libraries/autoload.php');

 // On lance la méthode statique "process" qui fait l'éguillage en fonction de la chaine de requete de l'url.
 \Application::process();