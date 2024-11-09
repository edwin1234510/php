<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>subir archivo</title>
</head>
<body>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div>
      <input type="text" name="nombre">
    </div>
    <div>
      <input type="file" name="file">
    </div>
    <button>subir</button>
  </form>
</body>
</html>