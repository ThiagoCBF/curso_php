<?php

    class Cachorro {

        function latir() {
            echo "Aauuuuuuuuu <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m metros <br>";
        }
    }

    $boxer = new Cachorro;
    $boxer->latir();
    $boxer->andar(10);

    $pug = new Cachorro;
    $pug->latir();
    $pug->andar(2);