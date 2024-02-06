<?php

    class Humano {

        public const OLHOS = 2;
        public $idade = 19;
        public $nome = "Thiago";

        function falar() {
            echo "Bom dia <br>";
        }
    }

    class Professor extends Humano {
        public $idade = 27;
        public $nome = "Matheus";
        
        function falarProfessor() {
            echo "Bom Noite <br> ";
        }
    }

    $thiago = new Humano;

    $thiago->falar();
    echo "Olá eu sou o $thiago->nome e tenho $thiago->idade anos <br>";

    $matheus = new Professor;

    $matheus->falarProfessor();
    echo "Olá eu sou o $matheus->nome e tenho $matheus->idade anos <br>";

    $thiago->falar();
    echo "Olá eu sou o $thiago->nome e tenho $thiago->idade anos <br>";