<?php
require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sql4 = "SELECT * FROM usuarios";
$bandera4 = $conexion->prepare($sql4);
$bandera4->execute();
$usuarios = $bandera4->fetchAll();
?>
<table border="bold 1px">
    <tr>
        <td>usuario_id</td>
        <td>nombre</td>
        <td>apellido</td>
        <td>correo</td>
        <td>fecha_nacimiento</td>
        <td>id_genero</td>
        <td>id_ciudad</td>
    </tr>
    <?php foreach ($usuarios as $key => $value){
        ?>
        <tr>
            <td><?=$value ['usuario_id']?></td>
            <td><?=$value ['nombre']?></td>
            <td><?=$value ['apellido']?></td>
            <td><?=$value ['correo']?></td>
            <td><?=$value ['fecha_nacimiento']?></td>
            <td><?=$value ['id_genero']?></td>
            <td><?=$value ['id_ciudad']?></td>
            <td><a href="actualizar.php?iduser=<?=$value['usuario_id']?>" >actualizar</a></td>
            <td><a href="eliminar.php?iduser=<?=$value['usuario_id']?>" >eliminar</a></td>
        </tr>
        <?php
        } ?>
</table>
<a href="index.php">registrar</a>