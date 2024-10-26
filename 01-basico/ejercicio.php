<?php
$num = 12;
if (($num %2) == 0 ){
  ?><h1>es par</h1><?php
}
?>
<?php
//en un almacen se hace 20% cuya compra supere los 100 dolares ¿ cuanto es la cantidad a pagar?
$compra = 120 ;
$resultado;
if ($compra > 100){
  $compra = $compra-(($compra*20)/100);
  echo "lo que debe pagar es: ".$compra;
}

//calcular el total que debe pagar en un monta llantas, las llanta vale 800 si se compra menos de 5 llantas, y de 700 si se compra 5 o mas llantas
echo"<br>";
$cantidad = 8;
if ($cantidad <= 5){
  echo "el valor a pagar es: ".$cantidad * 800;
}
else{
  echo "el valor a pagar es: ".$cantidad * 700;
}
echo"<br>";
//determinar si un estudiante apurueba o reprueba un curso, sabiendo que su promedio de tres calificaiones de menor 3.0 repruba, sino aprueba

$nota1 = 5;
$nota2 = 3;
$nota3 = 1;

$resultado = ($nota1 + $nota2 + $nota3) / 3;

if ($resultado <= 3.0){
  echo "reprobo";
}
else{
  echo "aprobo";
}

echo"<br>";
//--------operador ternario------------------
//operador ? true : false ;
// (8 >= 10) ? echo"verdadero": echo"falso";

$num1 = 5;
$num2 = 2;
echo ($num1 > $num2) ?$num1*$num2 : $num1 / $num2;