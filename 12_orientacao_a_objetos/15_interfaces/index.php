<?php

    interface Caracteristicas {

        const nome = "Thiago";

        public function falar();

        
    }

    class Humano implements Caracteristicas {

        public $idade = 19;

        public function falar() {
            echo "Olá Mundo! <br>";
        }

        public function dizerNome() {

            echo "Meu nome é " . self::nome . "<br>";
        }
    }


    $thiago = new Humano;

    $thiago->falar();
    $thiago->dizerNome();