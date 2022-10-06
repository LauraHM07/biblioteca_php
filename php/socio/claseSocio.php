<?php
    class Socio {
        public $dni;
        public $nombre;
        public $apellidos;
        public $telefono;
        public $direccion;

        function __construct($dni, $nombre, $apellidos, $telefono, $direccion) {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
        }

        function get_dni() {
            return $this->dni;
        }

        function get_nombre() {
            return $this->nombre;
        }

        function get_apellidos() {
            return $this->apellidos;
        }

        function get_telefono() {
            return $this->telefono;
        }

        function get_direccion() {
            return $this->direccion;
        }
    }
?>