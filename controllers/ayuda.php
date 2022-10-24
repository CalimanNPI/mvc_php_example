<?php

class Ayuda extends Controller
{
    function __construct()
    {
        echo "<p>Nuevo controlador Ayuda</p>";
        parent::__construct();
        $this->view->render('ayuda/index');
    }

    public function Ayudar()
    {
        echo "Estas Ayudando";
    }
}
