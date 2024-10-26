<?php
// los alumnos de un curso se han dividido en dos grupos dependiendo su sexo. el grupo de las mujeres esta onfomado por la M y los hombres posterior a la N y el grupo b por el resto. debe mostrar por pantalla el grupo que pertenece

$nombre = "edwin";
$sexo = "m";

function grupo($nombre, $sexo){
  if ($sexo === "F" && strtoupper($nombre) < "M" || $sexo === "M" && strtoupper($nombre) > "N"){
    return "grupo A";
  }
  else{
    return "grupo B";
  }
}
$grupo = grupo($nombre, $sexo);
echo $grupo;

// en una farmacia aplica al precio de lo remedios el 10% de descuento hacer un programa que calcule el valor del descuento y costo final del medicamentos 