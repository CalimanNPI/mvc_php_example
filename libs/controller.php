<?php

class Controller
{
    function __construct()
    {
        //echo "<p>Controller</p>";
        $this->view = new View();
    }

    public function loadModel($model)
    {
        $url = 'models/' . $model . 'model.php';

        if (file_exists($url)) {
            require $url;

            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}
