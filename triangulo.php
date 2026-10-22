<?php

// La uso para imprimir mi clase TriangleGenerator

// Llamo a la clase (usando DIR no me equivoco de ruta)
require_once __DIR__ . ("/clases/TriangleGenerator.php");

// Defino la altura del triángulo 
$altura = 7;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulo</title>
    <style>   
    /* Establecer la fuente predeterminada como monospace */   
    body {   
        font-family: monospace;   
    }   
</style>
</head>
<body>
    <!-- Aquí veremos sin encabezados directamente el triángulo -->
    <?= TriangleGenerator::generateTriangle($altura); ?>
</body>
</html>