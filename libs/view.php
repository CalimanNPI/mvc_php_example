<?php

class View
{
    function __construct()
    {
        echo "<p>Vista</p>";
    }

    public function render($nombre)
    {
        require "views/" . $nombre . ".php";
    }
}
