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


$sql
 = "INSERT INTO usuarios (nombre,apellido,correo,fecha_nacimiento,id_genero,id_ciudad) values 
(:nombre,:apellido,:correo,:fecha_nacimiento,:id_genero,:id_ciudad)";

$stm = $conexion->prepare($sql);
$stm -> bindParam(":nombre",$nombre);
$stm -> bindParam(":apellido",$apellido);
$stm -> bindParam(":correo",$correo);
$stm -> bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm -> bindParam(":id_genero",$genero);
$stm -> bindParam(":id_ciudad",$ciudad);

$usuario = $stm ->execute();
$usuario_id = $conexion->lastInsertId();
foreach ($lenguaje as $key => $value){
    $sql = "INSERT INTO lenguajes_usuarios (id_aprendiz,id_lenguaje) VALUES (:id_aprendiz,:id_lenguaje)";
    $stm = $conexion->prepare($sql);

    $stm -> bindParam(":id_aprendiz",$usuario_id);
    $stm -> bindParam(":id_lenguaje",$value);
    $usuario = $stm ->execute();
}
echo"<pre>";
print_r($_REQUEST);
echo"</pre>";
