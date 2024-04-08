<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado de Operación</title>
</head>
<body>
  <h1>Resultado de Operaciones</h1>
  <?php
  if (isset($_GET["resultado"])) {
      $resultado = $_GET["resultado"];
      echo "<p>El resultado de la operación es: $resultado</p>";
  } else {
      echo "<p>No se proporcionó ningún resultado.</p>";
  }
  ?>
</body>
</html>
