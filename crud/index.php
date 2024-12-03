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

<form action="controlador.php" method="post">
    <div>
        <label for="nombre">nombre</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <br>
    <div>
        <label for="apellido">apellido</label>
        <input type="text" id="apellido" name="apellido"required>
    </div>
    <br>
    <div>
        <label for="correo">correo</label>
        <input type="text" id="correo" name="correo"required>
    </div>
    <br>
    <div>
        <label for="fecha_nacimiento">fecha nacimiento</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"required>
    </div>
    <br>
    <div>
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
    <br>
    <br>
    <div>
        <label for="genero_id">genero</label>
            <?php
            foreach ($generos as $key => $value){
                ?>
                <br>
                <input type="radio" id="<?= $value['genero_id']?>" name="genero_id"  value="<?= $value['genero_id']?>">
                <?= $value['genero']?>
            <?php
            }
            ?>
            <br>
    </div>
    <br>
    <div>
            <label for="lenguaje_id">lenguajes</label>
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
    <button>enviar</button>
</form>
<br>




