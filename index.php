<?php

// Mi main, clase ejecutable
// Imprimo por pantalla todos los alumnos, los profesores y las asignaturas
// Llamo a las clases
require_once __DIR__ . ("/clases/Asignatura.php");
require_once __DIR__ . ("/clases/Profesor.php");
require_once __DIR__ . ("/clases/Alumno.php");

// Necesito volcar los datos aquí
// Son arrays de objetos
// DATOS ALUMNOS
$alumnos = Alumno::crearAlumnosDeMuestra();
// DATOS PROFESORES
$profesores= Profesor::crearProfesoresDeMuestra();
// DATOS ASIGNATURAS
$asignaturas=Asignatura::crearAsignaturasDeMuestra();

// Creamos los array filtrados, para poder imprimirlos luego en el HTML

// PROGRAMACIÓN ESTRUCTURADA
/*
$alumnosMenoresIgual23=[];
foreach($alumnos as $alumno){
        if($alumno->getEdad() <= 23){
            $alumnosMenoresIgual23[]=$alumno;
        }
    }
*/
// PROGRAMACIÓN FUNCIONAL
$alumnosMenoresIgual23 = array_filter($alumnos, function($alumno){
    return $alumno->getEdad() <= 23;
});

// Necesito matricular alumnos para las 2 últimas impresiones
// Matriculo aleatoriamente alumnos en asignaturas
$alumnos[0]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);

// Creo un array que contenga todos los alumnos que han sido matriculados en AL MENOS 2 asignaturas
$alumnosConAlMenos2Asignaturas = array_filter($alumnos, function($alumno){
    // El array asignaturas que es atributo de Alumno debe de tener como mínimo una longitud de 2
    return count($alumno->getAsignaturas()) >=2;
});

// Creo un array que contega las asignaturas donde hay matriculado al menos 1 alumno
$asignaturasConAlMenosUnAlumno = array_filter($asignaturas, function($asignatura) use ($alumnos){
    foreach($alumnos as $alumno){
        foreach($alumno->getAsignaturas() as $asignaturaMatriculada){
            if ($asignaturaMatriculada->getId() == $asignatura->getId()){
                return true;
            }
        }
    }
    return false;
});

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

    <!-- Hasta aquí solo hemos volcado datos -->
    <!-- Ahora hay que filtrar -->

    <!-- Lista de alumnos <= 23 años -->
    <h1>Alumnos <= 23</h1>
    <ul>
        <?php foreach ($alumnosMenoresIgual23 as $alumno){ ?>
            <li><?= $alumno ?></li>
        <?php } ?>
    </ul>

    <!-- Lista de alumnos matriculados al menso en 2 asignaturas -->
    <h1>Alumnos con al menos dos asignaturas</h1>
    <ul>
        <?php foreach ($alumnosConAlMenos2Asignaturas as $alumno){ ?>
            <li><?= $alumno ?></li>
        <?php } ?>
    </ul>

    <!-- Lista de asignaturas con al menos un alumno  -->
    <h1>Asignaturas con algún alumno matriculado</h1>
    <ul>
        <?php foreach($asignaturasConAlMenosUnAlumno as $asignatura){ ?>
            <li><?= $asignatura ?></li>
        <?php } ?>
    </ul>
</body>
</html>
