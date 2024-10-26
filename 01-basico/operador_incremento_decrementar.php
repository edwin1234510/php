<?php
/**
 * operadores de incremento y decremento :
 * simbolo               nombre
 *   ++                incrementar
 *   --                decrementar
 * 
 * ejemplo
 * ++$variable      pre-incremento
 * --$variable      pre-decremento
 * 
 * (operadores unarios)
 */

$num = 10;
//primero incrementa y luego realiza la operación
echo"pre-incremento ".++$num;
echo"<br>";
//primero realiza la operacion y luego incrementa (unario)
echo"post-incremento ".$num++;
echo"<br>";
echo$num;
echo"<br>";
//primero resta el valor y luego realiza la operación
echo"pre-decremento ".--$num;
echo"<br>";
//primero realiza la operacion y luego resta el valor
echo"post-decremento ".$num--;
echo"<br>";
$resultado = ++$num;
echo $resultado;
echo"<br>";
$resultado = $num++;
echo " ".$resultado;