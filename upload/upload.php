<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
// var_dump($_FILES);


if(isset($_FILES["file"])){
  $errores = array();
  $temporal = $_FILES["file"]["tmp_name"];
  $nombre_archivo = $_FILES["file"]["name"];
  $tamaño_archivo = $_FILES["file"]["size"];
  $tipo_archivo = $_FILES["file"]["type"];
  $error_archivo = $_FILES["file"]["error"];

  $bandera = explode('.',$nombre_archivo);
  $archivo_extencion = strtolower(end($bandera));
  $extenciones = array("jpge","jpg","png");
  if(in_array($archivo_extencion ,$extenciones)===false){
    $errores[] = "extencion no permitida";
  }
  if($tamaño_archivo > 2097152){
    $errores[] = "el tamño maximo del archivo es de 2mg";
  }
  if(empty($errores)){
    move_uploaded_file($temporal,"imagenes/".rand(1,11)." - ".$_REQUEST["nombre"]);

  }
  
} else{
  echo "no envio archivo";
}
// echo "<pre>";
// echo $error_archivo;
// echo "</pre>";