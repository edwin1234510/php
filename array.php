<?php
// $estudiantes = array("carlos","jose","maria","luis");
$estudiantes = ["carlos","jose","maria","luis"];

echo"<pre>";
print_r($estudiantes);
echo"</pre>";

echo $estudiantes[2];




$aprendiz = [
  'nombre' => 'edwin',
  'apellido' => 'villabona',
  'edad' => 18,
  'deudas' => '7.500.000'
];
echo"<pre>";
print_r($aprendiz);
echo"</pre>";


$tutor = [
  'nombre' => 'edwin',
  'apellido' => 'villabona',
  'edad' => 18,
  'direccion' => [
    'ciudad' => 'floridablanca',
    'barrio' => 'reposo',
    'nomenclatura' => 'calle 12 #52-32'
  ],
  'habilidades' => [
    'git', 'python', 'css', 'html', 'java'
  ]
];


echo"<pre>";
print_r($tutor);
echo"</pre>";

echo"<pre>";
print_r($tutor['direccion']);
echo"</pre>";

echo"<pre>";
print_r($tutor['direccion']['nomenclatura']);
echo"</pre>";

$tutor['habilidades'][3]=['java script'];

$tutor['direccion']['departamento'] = ['santander'];

// unset($tutor['habilidades'][2]);
array_splice($tutor['habilidades'],2,1);

echo"<pre>";
print_r($tutor['habilidades']);
echo"</pre>";

echo count($tutor['habilidades']);
