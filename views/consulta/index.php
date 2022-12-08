<?php require "views/header.php" ?>
<div id="main">

    <?php //var_dump($this->datos); 
    foreach ($this->datos as $value) {
        //var_dump($value);
        echo "<br>" . $value->matricula . "<br>";
    }

    ?>
    <h3 class="center">Bienvenido al consulta</h3>

</div>

<?php require "views/footer.php" ?>