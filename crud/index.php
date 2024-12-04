<?php

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sql1 = "SELECT * FROM ciudades";
$sql2 = "SELECT * FROM generos";
$sql3 = "SELECT * FROM lenguajes";
$sql4 = "SELECT * FROM usuarios";
$bandera1 = $conexion->prepare($sql1);
$bandera2 = $conexion->prepare($sql2);
$bandera3 = $conexion->prepare($sql3);
$bandera4 = $conexion->prepare($sql4);
$bandera1->execute();
$bandera2->execute();
$bandera3->execute();
$bandera4->execute();
$ciudades = $bandera1->fetchAll();
$generos = $bandera2->fetchAll();
$lenguajes = $bandera3->fetchAll();
$usuarios = $bandera4->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="controlador.php" method="post" class="formulario">
        <div class="informacion">
            <label for="nombre">nombre</label>
            <input type="text" id="nombre" name="nombre" required pattern="[a-zA-Z]+" placeholder="ingrese nombre">
        </div>
        <br>
        <div class="informacion">
            <label for="apellido">apellido</label>
            <input type="text" id="apellido" name="apellido" required pattern="[a-zA-Z]+" placeholder="ingrese apellido">
        </div>
        <br>
        <div class="informacion">
            <label for="correo">correo</label>
            <input type="text" id="correo" name="correo" required pattern="[a-zA-Z1-9]+@[A-Za-z]+[.][a-z]+" placeholder="ingrese correo">
        </div>
        <br>
        <div class="informacion">
            <label for="fecha_nacimiento">fecha nacimiento</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>
        <br>
        <div class="informacion">
            <label for="ciudad_id">ciudad</label>
            <select name="ciudad_id" id="ciudad_id" required>
                <?php
                foreach ($ciudades as $key => $value){
                    ?>
                    <option id="<?= $value['ciudad_id']?>" value="<?= $value['ciudad_id']?>">
                        <?= $value['ciudad_nombre']?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>
        <br>
        <div class="content">
            <div class="seleccion">
                <label for="genero_id">genero</label>
                <br>
                    <?php
                    foreach ($generos as $key => $value){
                        ?>
                        <br>
                        <input type="radio" id="<?= $value['genero_id']?>" name="genero_id"  value="<?= $value['genero_id']?>" required>
                        <?= $value['genero']?>
                    <?php
                    }
                    ?>
                    <br>
            </div>
            <br>
            <div class="seleccion">
                    <label for="lenguaje_id">lenguajes</label>
                    <br>
                    <?php
                    foreach ($lenguajes as $key => $value){
                        ?>
                        <br>
                        <input type="checkbox" id="<?= $value['lenguaje_id']?>" name="lenguajes[]" value="<?= $value['lenguaje_id']?>">
                        <?= $value['lenguaje']?>
                    <?php
                    }
                    ?>
                    <br>
            </div>
            <br>
            <button class="boton">enviar</button>
        </div>
        <br>
        <a href="vista.php" class="link">ver tabla</a>
    </form>
</body>
</html>






