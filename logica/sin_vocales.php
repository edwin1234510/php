<?php
// escriba una funcion que tome una cadena y que devuelva la cadena sin las vocales 
  $palabra = "EDWIN";

  function eliminar($palabra){
    $vocales = array("a","e","i","o","u","A","E","I","O","U","á","é","í","ó","ú","Á","É","Í","Ó","Ú");
    return $resultado = str_replace($vocales," ",$palabra);
  }
$rta = eliminar($palabra);
echo $rta;

