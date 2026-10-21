<?php
// CLASE ABSTRACTA MIEMBRO (NO INSTANCIA, HEREDAN DE ELLA)
abstract class Miembro{

        // ATRIBUTOS
        protected $id;
        protected $nombre;
        protected $apellidos;
        protected $email;

        // CONSTRUCTOR
        public function __construct($id, $nombre, $apellidos, $email){
                $this->id = $id;
                $this->nombre = $nombre;
                $this->apellidos = $apellidos;
                $this->email = $email;
        }

        // GETTERS
        public function getId(){
                return $this->id;
        }
        public function getNombre(){
                return $this->nombre;
        }
        public function getApellidos(){
                return $this->apellidos;
        }
        public function getEmail(){
                return $this->email;
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
        public function setApellidos($apellidos){
                $this->apellidos = $apellidos;
                return $this;
        }
        public function setEmail($email){
                $this->email = $email;
                return $this;
        }

        // TO STRING
        public function __toString(){
                return "Nombre:" . $this->nombre . " " . "Apellidos" . $this->apellidos . " " . "Email" . $this->email;
        }


}
?>