<?php

class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
        //echo "<p>Nuevo controlador Main</p>";
    }
    public function render()
    {
        $this->view->render('main/index');
    }

    public function index()
    {
        echo "Saludo Main";
    }
}
