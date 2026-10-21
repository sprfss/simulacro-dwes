<?php

// CLASE ALUMNO (HEREDAD DE MIEMBRO)

require_once("Miembro.php");

class Alumno extends Miembro{

    // ATRIBUTOS
    private int $edad;
    private array $asignaturas = [];
    private bool $cursoAbonado = false ;

    // CONSTRUCTOR
    public function __construct($id, $nombre, $apellidos, $email, $edad){
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
        
    }

    // GETTERS
    public function getEdad(){
        return $this->edad;
    }
    public function getAsignaturas(){
        return $this->asignaturas;
    }
    public function getCursoAbonado(){
        return $this->cursoAbonado;
    }

    // SETTERS
    public function setEdad($edad){
        $this->edad = $edad;
        return $this;
    }
    public function setAsignaturas($asignaturas){
        $this->asignaturas = $asignaturas;
        return $this;
    }
    public function setCursoAbonado($cursoAbonado){
        $this->cursoAbonado = $cursoAbonado;
        return $this;
    }

    // TO STRING (LO HAGO DE ACRODE AL OUPUT)
    public function __toString(){
        return "Nombre: " . $this->nombre . " " . $this->apellidos .", " . "Email: " . $this->email;
    }

    // MÉTODOS  

    // CREAR ALUMNOS DE MUESTRA QUE GENERA UNA COLECCIÓN (SIMULA CONEXIONES A LA BASE DE DATOS) 
    public static function crearAlumnos(){
        $coleccionAlumnos = [
            new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
            new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
            new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
            new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
            new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
            new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
            new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
            new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
            new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
            new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24)
        ];
        return $coleccionAlumnos;

    }

    // CREAR MATRICULARSE EN UNA ASIGNATURA, NO PERMITE QUE UN ALUMNO SE MATRICULE 2 VECES EN LA MISMA ASIGNATURA
    // Le paso un objeto creado de la clase Asignatura y lo compara
    public function matricularseEnAsignatura(Asignatura $asignatura){
        foreach ($this->asignaturas as $asignaturaMatriculada){
            if ($asignaturaMatriculada->getId() === $asignatura->getId()){
                return; //"El alumno ya está matriculado en la asignatura " . $asignatura->getNombre() . ".";
            }
        }
        // Los corchetes son para agregar un elemento a la colección
        $this->asignaturas[] = $asignatura;
        // return "El alumno se ha matriculado en la asignatura correctamente.";
    }



}











?>