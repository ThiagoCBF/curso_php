<?php

    class Car {

        public $rodas = 4;
        private $vidro = "Sem Película";
        protected $portas = 4;


        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }
    }

    class Mecanico {

        public function alterarRodas($obj) {
            $obj->rodas = 10;
        }
        
        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $thiago = new Mecanico;

    $thiago->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    echo $carro->getVidro() . "<br>";

    echo $carro->getPortas() . "<br>";

    // $carro->vidro = "Teste"
    

