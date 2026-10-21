<?php

// Mi main, clase ejecutable
// Imprimo por pantalla todos los alumnos, los profesores y las asignaturas
// Llamo a las clases
require_once __DIR__ . ("/clases/Asignatura.php");
require_once __DIR__ . ("/clases/Profesor.php");
require_once __DIR__ . ("/clases/Alumno.php");

// Necesito volcar los datos aquí
// DATOS ALUMNOS
$alumnos = Alumno::crearAlumnosDeMuestra();
// DATOS PROFESORES
$profesores= Profesor::crearProfesoresDeMuestra();
// DATOS ASIGNATURAS
$asignaturas=Asignatura::crearAsignaturasDeMuestra();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulacro</title>
</head>
<body>
    <!-- Imprimos los datos (las colecciones que funcionan como base de datos) -->
    <!-- ALUMNOS -->
    <h1>Alumnos</h1>
    <ul>
        <?php foreach($alumnos as $alumno){ ?>
            <li><?= $alumno ?></li>
        <?php } ?>
    </ul>
    <!-- PROFESORES -->
    <h1>Profesores</h1>
    <ul>
        <?php foreach($profesores as $profesor){?>
            <li><?= $profesor ?></li>
        <?php }?>
    </ul>
    <!-- ASIGNATURAS -->
    <h1>Asignaturas</h1>
    <ul>
        <?php foreach($asignaturas as $asignatura){?>
            <li><?= $asignatura ?></li>
        <?php } ?> 
    </ul>
</body>
</html>
