<?php
require('conexion.php');

$user_id= $_GET['iduser'];

$db = new Conexion();
$conexion = $db->getConexion();
$sql1 = "SELECT * FROM ciudades";
$sql2 = "SELECT * FROM generos";
$sql3 = "SELECT * FROM lenguajes";
$sql4 = "SELECT * FROM usuarios WHERE usuario_id = $user_id";
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
    <?php foreach ($usuarios as $key => $value){
        ?>
        <div>
            <label for="nombre">nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?= $value ['nombre']?>" required>
        </div>
    <br>
    <div>
        <label for="apellido">apellido</label>
        <input type="text" id="apellido" name="apellido" value="<?= $value ['apellido']?>" required>
    </div>
    <br>
    <div>
        <label for="correo">correo</label>
        <input type="text" id="correo" name="correo" value="<?= $value ['correo']?>" required>
    </div>
    <br>
    <div>
        <label for="fecha_nacimiento">fecha nacimiento</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?= $value ['fecha_nacimiento']?>" required>
    </div>
    <br>
    <div>
        <label for="ciudad_id">ciudad</label>
        <select name="ciudad_id" id="ciudad_id" required>
            <?php
            foreach ($ciudades as $key => $c){
                ?>
                <option id="<?= $c['ciudad_id']?>" value="<?= $c['ciudad_id']?>"
                <?php if($value['id_ciudad'] == $c['ciudad_id']){ ?>
                    selected <?php
                }?>>
                    <?= $c['ciudad_nombre']?>
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
            foreach ($generos as $key => $g){
                ?>
                <br>
                <input type="radio" id="<?= $g['genero_id']?>" name="genero_id"  value="<?= $g['genero_id']?>" 
                <?php if($value['id_genero'] == $g['genero_id']){?>
                    checked <?php
                } ?> >
                <?= $g['genero']?>
            <?php
            }
            ?>
            <br>
    </div>
    <br>
    <div>
            <label for="lenguaje_id">lenguajes</label>
            <?php
            foreach ($lenguajes as $key => $l){
                ?>
                <br>
                <input type="checkbox" id="<?= $l['lenguaje_id']?>" name="lenguajes[]" value="<?= $l['lenguaje_id']?>" 
                <?php if($value['usuario_id'] == $l['id_aprendiz']){?>
                    checked <?php
                } ?> >
                <?= $value['lenguaje']?>
            <?php
            }
            ?>
            <br>
    </div>
    <br>
    <button>actualizar</button>
    <?php 
    } ?>
</form>