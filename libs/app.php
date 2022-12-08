<?php

class App
{
    function __construct()
    {
        //echo "New app";

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //var_dump($url);

        if (empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            //$controller->index();
            $controller->render();
            return false;
        }

        $archivoController = 'controllers/' . $url[0] . '.php';

        if (file_exists($archivoController)) {
            require_once $archivoController;

            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if (isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->render();
            }
        } else {
            require "controllers/errores.php";
            $error = new Errores();
        }
    }
}
