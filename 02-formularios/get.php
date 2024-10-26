<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Get</title>
</head>
<body>


  
  <form action="controlador.php" method="post">
    <div>
      <label for="nombre">Ingrese nombre</label>
      <input type="text" name="nombre" id='nombre'>
    </div>

    <br>

    <div>
      <label for="apellido">Ingrese apellido</label>
      <input type="text" name="apellido" id='apellido'>
    </div>

    <br>

    <div>
      <label for="telefono">Ingrese telefono</label>
      <input type="text" name="telefono" id='telefono'>
    </div>
    
    <br>

    <div>
      <label for="edad">Ingrese la edad</label>
      <input type="text" name="edad" id='edad'>
    </div>
    
    <br>

    <div>
      <label for="css">CSS</label>
      <input type="checkbox" name="checkbox[]" id="css" value="css">
      <br>
      <label for="html">HTML</label>
      <input type="checkbox" name="checkbox[]" id="html" value="html">
      <br>
      <label for="javascript">javaScript</label>
      <input type="checkbox" name="checkbox[]" id="javascript" value="javascript">
      <br>
    </div>

    <button type="submit">Enviar</button>
  </form>
  


</body>
</html>