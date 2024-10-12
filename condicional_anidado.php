<?php
/**
 * estructura
 * if (?){
 *  if(?){
 *   codigo a ejecutar
 *  }else{
 *    codigo a ejecutar
 *  }
 * }
 */
$a = 2;
$b = 3;
$c = 10;
if ($a > $b){
  if ($a > $c){
    echo $a;
  }
  if ($a < $c){
    echo $c;
  }
}
if ($b > $a){
  if ($b > $c){
    echo $b;
  }
  if ($b < $c){
    echo $c;
  }
}
echo "<br>";

$dia = 2;

if ($dia == 1){
  echo"lunes";
}
else if ($dia == 2){
  echo "martes";
  }
else if ($dia == 3){
  echo "miercoles";
}
else if ($dia == 4){
  echo "jueves";
}
else if ($dia == 5){
  echo "vieres";
}
else if ($dia == 6){
  echo "sabado";
}
else if ($dia == 7){
  echo "domingo";
}
