<?php
$a = 25;
$b = 0;
function calculadora($a, $b){
  
  try{
    if($b === 0){
      throw new Exception('divicion por cero'); 
    }
    $suma = $a + $b;
    $resta = $a - $b;
    $multiplicacion = $a * $b;
    $divicion = $a / $b;
    $respuesta = array(
    "suma"            => $suma,
    "resta"           => $resta,
    "multiplicacion"  => $multiplicacion,
    "divicion"        =>  $divicion
  );
  return $respuesta;

  } catch (\Exception $e){
  return $e->getmessage();
  }

}
  


$resultado = calculadora ($a, $b);
echo "<pre>";
print_r($resultado);
echo "</pre>";