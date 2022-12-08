<?php

class Nuevo extends Controller
{
    function __construct()
    {
        parent::__construct();
        //echo "<p>Nuevo controlador Main</p>";
        $this->view->mensaje = "Aquí hay perro en tacos";
    }

    public function render()
    {
        $this->view->render('nuevo/index');
    }
    
    public function registrarAlumno()
    {
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        
        $mensaje = "";
        
        if ($this->model->insert([$nombre, $apellido, $matricula])) {
            $mensaje = 'Nuevo alumno';
        } else {
            $mensaje = "Ya existe el usuario";
        }
        
        $this->view->mensaje = $mensaje;
        $this->render();
    }
}
