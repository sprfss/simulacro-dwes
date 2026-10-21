<?php
// CLASE ASIGNATURA 

class Asignatura {
    // ATRIBUTOS
    private $id;
    private $nombre;
    private $creditos;

    // CONSTRUCTOR
    public function __construct($id, $nombre, $creditos){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    // GETTERS
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCreditos(){
        return $this->creditos;
    }

    // SETTERS
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function setCreditos($creditos){
        $this->creditos = $creditos;
        return $this;
    }

    // TO STRING (LO HAGO DE ACRODE AL OUPUT)
    public function __toString(){
        return "Nombre: " . $this->nombre . ", " . "Creditos: " . $this->creditos;
    }

    // MÉTODOS

    // CREAR ASIGNATURAS DE MUESTRA QUE GENERA UNA COLECCIÓN DE ASIGNATURAS ()
    public static function crearAsignaturasDeMuestra(){
        $coleccionAsignaturas = [
            new Asignatura(1, "DWES", "7 creditos"),
            new Asignatura(2, "DWEC", "6 creditos"),
            new Asignatura(3, "DIW", "4 creditos"),
            new Asignatura(4, "DAW", "4 creditos"),
        ];
        return $coleccionAsignaturas;

    }

}


















?>