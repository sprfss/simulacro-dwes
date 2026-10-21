<?php

// CLASE PROFESOR (HEREDAD DE MIEMBRO)

require_once __DIR__ . ("/Miembro.php");

class Profesor extends Miembro{

    // ATRIBUTOS
    private bool $titular = false;
    // Un profesor solo puede impartir una asignatura
    private $asignatura;
    
    // CONSTRUCTOR
    public function __construct($id, $nombre, $apellidos, $email, $asignatura){
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->asignatura = $asignatura;
    }

    // GETTERS
    public function getTitular(){
        return $this->titular;
    }
    public function getAsignatura(){
        return $this->asignatura;
    }

    // SETTERS
    public function setTitular($titular){
        $this->titular = $titular;
        return $this;
    }
    public function setAsignatura($asignatura){
        $this->asignatura = $asignatura;
        return $this;
    }

    // TO STRING (LO HAGO DE ACRODE AL OUPUT)
    public function __toString(){
        return "Nombre: " . $this->nombre . " " . $this->apellidos . ", " . "Email: " . $this->email;
    }

    // MÉTODOS

    // CREAR PROFESORES DE MUESTRA QUE GENERA UNA COLECCIÓN (SIMULA CONEXIONES A LA BASE DE DATOS)
    public static function crearProfesoresDeMuestra(){
        $coleccionProfesores = [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES"),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW"),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC"),
            new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW"),
        ];
        return $coleccionProfesores;

    }

}


?>