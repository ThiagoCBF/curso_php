<?php

    trait Objeto {
        public function teste() {
            echo "Testando trait de objeto <br>";
        }
    }

    trait Testando {

        public $y = 7;

        public function traitTeste() {
            echo "Este método é o da trait Testando <br>";
        }
    }

    class Central {
        use Objeto;
        use Testando;
    }

    $x = new Central;
    $x->teste();
    $x->traitTeste();
    echo $x->y;