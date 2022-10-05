<?php
    class Libro {
        public $isbn;
        public $titulo;
        public $autor;
        public $fecha;

        function __construct($isbn, $titulo, $autor, $fecha) {
            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->fecha = $fecha;
        }

        function get_isbn() {
            return $this->isbn;
        }

        function set_isbn($isbn) {
            $this->isbn = $isbn;
        }

        function get_titulo() {
            return $this->titulo;
        }

        function set_titulo($titulo) {
            $this->titulo = $titulo;
        }

        function get_autor() {
            return $this->autor;
        }

        function set_autor($autor) {
            $this->autor = $autor;
        }

        function get_fecha() {
            return $this->fecha;
        }

        function set_fecha($fecha) {
            $this->fecha = $fecha;
        }
    }
?>