<?php

require('conexion.php');
$db = new Conexion();
$conexion = $db->getConexion();

$id = $_REQUEST['iduser'];

$sql_elim = "DELETE FROM lenguajes_usuarios WHERE id_aprendiz=:id_aprendiz";
$stm_elim = $conexion -> prepare($sql_elim);
$stm_elim -> bindParam(":id_aprendiz",$id);
$stm_elim ->execute();

$sql_elim2 = "DELETE FROM usuarios WHERE usuario_id=:usuario_id";
$stm_elim2 = $conexion -> prepare($sql_elim2);
$stm_elim2 -> bindParam(":usuario_id",$id);
$stm_elim2 -> execute();

header("Location: vista.php");







