<?php

//La fonction qui va se charger de transmettre les fichiers /classes requis.
spl_autoload_register(function($className){
    $className = str_replace("\\", "/", $className);   // remplace les backslash par des slash.
    require_once("libraries/$className.php");
});