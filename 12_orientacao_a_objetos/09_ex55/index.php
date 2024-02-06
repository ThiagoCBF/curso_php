<?php

    class Carro {
        public $marca = "Lamborghini";
        public $cor = "Preta";
        public $modelo = "Aventador";
        public $velocidade_maxima = 355;

        function setVelocidadeMaxima($vel) {
            $this->velocidade_maxima = $vel;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade máxima é de $this->velocidade_maxima Km/H <br>";
        }
    }

    $lambo = new Carro;
    
    echo "A $lambo->marca do modelo $lambo->modelo da cor $lambo->cor, consegue chegar a $lambo->velocidade_maxima km/h <br>";
    $lambo->setVelocidadeMaxima(360);
    $lambo->getVelocidadeMaxima();