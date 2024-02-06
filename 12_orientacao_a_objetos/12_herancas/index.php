<?php

    class Humano {

        public $idade = 29;

        public function falar() {
            echo "Olá Mundo! <br>";

        }

        private function gritar() {
            echo "PHP é legal <br>";
        }

        public function acessarGritar() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo "Shhhhh <br>";
        }

        public function acessarFalarBaixinho() {
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano {
        public function acessarFalarBaixinhoProgramador() {
            $this->falarBaixinho();
        }

    }

    $thiago = new Humano;
    $thiago->falar();
    $thiago->acessarFalarBaixinho();

    $ana = new Programador;

    echo $ana->idade . "<br>";

    $ana->falar();
    $ana->acessarGritar();
    $ana->acessarFalarBaixinhoProgramador();