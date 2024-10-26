<?php

$texto = "fundamento de programacion en PHP";

$asignacion = $texto;

$referencia = &$texto;

echo $asignacion;
echo "<chr>";
echo $referencia;
echo $texto = "asignacion por referencia";
echo "<chr>";
echo $referencia;
echo "<chr>";
echo $asignacion;
