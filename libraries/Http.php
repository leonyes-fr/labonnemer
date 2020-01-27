<?php

class Http {

    // Simple fonction static de redirection.
    public static function redirect(string $url): void {
        
        header("Location: $url");
        exit();
    }

}