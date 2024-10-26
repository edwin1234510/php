<?php
// cree una que calcule la longitud de palabra si es corta o es larga 
 $nombre = "jota";

 $resultado = strlen($nombre);
  if ($resultado < 5){
    echo "la palabra ($nombre) tiene $resultado caracteres (es corta)";
  }
  else{
    echo "la pabra ($nombre) tiene $resultado caracteres (es larga)";
  }



