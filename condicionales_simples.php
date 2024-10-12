<?php
/**
 * -----ESTRUCTURA DE CONDICIONALES SIMPLES------
 * if(exprecion){
 *  codigo a ejecutar
 * }
 * 
 * if(exprecion):
 *  codigo a ejecutar
 * endif;
 */

$edad = 18;
$saludo = "holaaa";

if ($edad >= 18){
  echo"holaa mayor de edad";
}

?>
<div>
  <?php if ($edad >= 18): ?>
    <h1><?= $saludo ?></h1>
  <?php endif; ?>
</div>

<div>
  <?php if ($edad >= 18){
    ?><h1>holaaa</h1><?php
  } ?>
</div>
