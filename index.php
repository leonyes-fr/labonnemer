<?php

/*
 *Bonjour ! Attachez vos ceintures, les gilets de sauvetage sont sur votre gauche, c'est parti !
 */

// Le require_once va déclencher la fonction d'autoload pour charger les classes requises automatiquement.
 require_once('libraries/autoload.php');

 // On lance la méthode statique "process" qui fait l'éguillage en fonction de la chaine de requete de l'url.
 \Application::process();