<?php

    class Car {

        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar() {
            echo "Vruummm <br>";
    
        }
    }

    $ferrari = new Car;

    $ferrari->rodas = 4;

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";

    $ferrari->cor = "Preta";

    echo $ferrari->cor . "<br>";

    $ferrari->ligar();
