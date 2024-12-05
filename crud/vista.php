<?php
require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sql4 = "SELECT * FROM usuarios";
$bandera4 = $conexion->prepare($sql4);
$bandera4->execute();
$usuarios = $bandera4->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
    <table class="tabla">
        <tr class="filas">
            <td class="casilla casilla--oscuro">usuario_id</td>
            <td class="casilla casilla--oscuro">nombre</td>
            <td class="casilla casilla--oscuro">apellido</td>
            <td class="casilla casilla--oscuro">correo</td>
            <td class="casilla casilla--oscuro">fecha_nacimiento</td>
            <td class="casilla casilla--oscuro">id_genero</td>
            <td class="casilla casilla--oscuro">id_ciudad</td>
        </tr>
        <?php foreach ($usuarios as $key => $value){
            ?>
            <tr class="filas">
                <td class="casilla"><?=$value ['usuario_id']?></td>
                <td class="casilla"><?=$value ['nombre']?></td>
                <td class="casilla"><?=$value ['apellido']?></td>
                <td class="casilla"><?=$value ['correo']?></td>
                <td class="casilla"><?=$value ['fecha_nacimiento']?></td>
                <td class="casilla"><?=$value ['id_genero']?></td>
                <td class="casilla"><?=$value ['id_ciudad']?></td>
                <td class="casilla"><a class="link" href="actualizar.php?iduser=<?=$value['usuario_id']?>" >actualizar</a></td>
                <td class="casilla"><a class="link" href="eliminar.php?iduser=<?=$value['usuario_id']?>" >eliminar</a></td>
            </tr>
            <?php
            } ?>
    </table>
    <div class="contenedor">
        <a class="boton" href="index.php">registrar</a>
    </div>
    
</body>
</html>
