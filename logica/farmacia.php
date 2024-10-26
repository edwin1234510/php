<?php
// en una farmacia aplica al precio de lo remedios el 10% de descuento hacer un programa que calcule el valor del descuento y costo final del medicamentos 

$medicamento = 1000;

function calcular($medicamento){
  $descuento = $medicamento * 0.1;
  echo "el descuento es de".$descuento;
  return "el valor final es de".$resultado = $medicamento - $descuento;
}
$pago_fin = calcular($medicamento);
echo $pago_fin;

