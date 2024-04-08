<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "suma":
            $resultado = $numero1 + $numero2;
            break;
        case "resta":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case "division":
            $resultado = $numero1 / $numero2;
            break;
        default:
            $resultado = "Operación no válida";
    }

    header("Location: resultado.php" . $resultado);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Empresa FJAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inicio.html">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#operaciones">Operaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.html">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catalogo.html">Catálogo de Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="enlaces.html">Enlaces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="comentarios.php">Envíanos tus comentarios</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="operaciones" class="container mt-5">
        <h1>Operaciones</h1>
        <form id="operacionesForm" action="procesar_operaciones.php" method="POST">
            <div class="form-group">
                <label for="numero1">Primer número:</label>
                <input type="number" class="form-control" id="numero1" name="numero1">
            </div>
            <div class="form-group">
                <label for="numero2">Segundo número:</label>
                <input type="number" class="form-control" id="numero2" name="numero2">
            </div>
            <div class="form-group">
                <label for="operacion">Operación:</label>
                <select class="form-control" id="operacion" name="operacion">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
