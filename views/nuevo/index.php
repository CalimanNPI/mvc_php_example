<?php require "views/header.php" ?>
<div id="main">

    <h3 class="center">Bienvenido al nuevo</h3>
    <h1 class="center"><?php echo $this->$mensaje; ?></h1>
    <form action="<?php echo constant('URL') ?>nuevo/registrarAlumno" method="post">
        <p>
            <label form="matricula">Matrícula</label>
            <input type="text" name="matricula" id="matricula" />
        </p>

        <p>
            <label form="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" />
        </p>

        <p>
            <label form="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" />
        </p>

        <p>
            <input type="submit" value="enviar" />
        </p>

    </form>

</div>

<?php require "views/footer.php" ?>