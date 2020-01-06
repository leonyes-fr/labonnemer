<?php

 //La classe renderer stock dans un tampon le contenu à intégrer au layout.
class Renderer {

   public static function render(string $path, array $variables = []) {

        extract($variables);
        ob_start();
        require('templates/' .$path . '.html.php');
        $pageContent = ob_get_clean();

        require_once('templates/layout.html.php');
    }

}