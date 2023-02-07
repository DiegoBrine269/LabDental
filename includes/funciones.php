<?php

    define('TEMPLATES_URL', __DIR__ . '/../views/includes/templates');
    define('FUNCIONES_URL', __DIR__ . '/funciones');
    define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

    function incluirTemplate(string $nombre, string $pagina = ''){
        include TEMPLATES_URL . "/${nombre}.php";
    }

    function debug($variable){
        echo "<pre>";
        var_dump($variable);
        echo "</pre>";
        exit;
    }
    
    //Valida que el atributo dado en el GET sea un número entero, de no ser así, redirecciona
    function validarGET($key, string $url){
        $valido = filter_var($key, FILTER_VALIDATE_INT);

        if(!$valido){
            header('Location: ' . $url);
        }

        return $valido;
    }

    //Escapa (Sanitizes) HTML
    function s($html){
        return htmlspecialchars($html);
    }