<?php

class Errores extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->message = "Error al cargar el recurso 2";
        $this->view->render('errores/index');
        //echo "<p>Nuevo controlador Ayuda</p>";
    }

}
