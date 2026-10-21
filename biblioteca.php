<?php

// Arrays Asociativos
// Libros es un array asociativo (libro1, libro2, libro3) 
// cuyos valores son a su vez arrays asociativos con los datos de cada libro
$libros = [
    "libro1" => [
        "titulo" => "PHP para Principiantes",
        "autor" => "Carlos Ruiz",
        "precio" => 19.99,
        "categoria" => "Desarrollo web"
    ],
    "libro2" => [
        "titulo" => "JavaScript Avanzado",
        "autor" => "Laura García",
        "precio" => 25.99,
        "categoria" => "Desarrollo web"
    ],
    "libro3" => [
        "titulo" => "Algoritmos en Python",
        "autor" => "Miguel Fernández",
        "precio" => 29.99,
        "categoria" => "Algoritmos"
    ]
];

// Filtro en un array los libros con categegría Desarrollo web y luego muestro ese array
$librosDesarrolloWeb = array_filter($libros, function ($libro) {
    return $libro['categoria'] == "Desarrollo web";
});






?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla y Lista de libros</title>
</head>

<body>
    <!-- PARTE 1 - TABLA DE INFORMACIÓN DE LOS LIBROS -->
    <h2>Información de todos los libros</h2>
    <table border=1 cellspacing="10" cellpadding="10">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($libros as $libro) { ?>
                <tr>
                    <td><?= $libro['titulo'] ?></td>
                    <td><?= $libro['autor'] ?></td>
                    <td><?= $libro['precio'] ?></td>
                    <td><?= $libro['categoria'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- PARTE 2 -  -->
    <!-- Lista numerada con los libros pertenecientes a la categoria desarrollo web -->
    <h2>Libros de la categoria 'Desarrollo Web'</h2>
    <ol>
        <?php foreach ($librosDesarrolloWeb as $libro) { ?>
            <li><?= $libro['titulo'] ?></li>
        <?php } ?>
    </ol>

</body>

</html>