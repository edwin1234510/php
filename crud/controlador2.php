<?php
require('conexion.php');
$db = new Conexion();
$conexion = $db->getConexion();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero_id'];
$ciudad = $_POST['ciudad_id'];
$lenguaje = $_POST['lenguajes'];
$id = $_POST['id'];

$sql = "UPDATE usuarios SET nombre=:nombre,apellido=:apellido,correo=:correo,fecha_nacimiento=:fecha_nacimiento,id_genero=:id_genero,id_ciudad=:id_ciudad
WHERE usuario_id=:id";

$stm = $conexion->prepare($sql);
$stm -> bindParam(":nombre",$nombre);
$stm -> bindParam(":apellido",$apellido);
$stm -> bindParam(":correo",$correo);
$stm -> bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm -> bindParam(":id_genero",$genero);
$stm -> bindParam(":id_ciudad",$ciudad);
$stm -> bindParam(":id",$id);

$stm->execute();

$sql_delete = "DELETE FROM lenguajes_usuarios WHERE id_aprendiz=:id";
$sql_delete = $conexion -> prepare($sql_delete);

$sql_delete -> bindParam(":id",$id);
$sql_delete -> execute();

$sql_insert = "INSERT INTO lenguajes_usuarios (id_aprendiz,id_lenguaje) VALUES (:id_aprendiz,:id_lenguaje)";
$stm2_insert = $conexion -> prepare($sql_insert);

foreach ($lenguaje as $key => $value){
    $stm2_insert-> bindParam(":id_aprendiz",$id);
    $stm2_insert -> bindParam(":id_lenguaje",$value);
    $stm2_insert ->execute();
}


?>