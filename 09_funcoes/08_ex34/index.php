<?php

    function imparPar($num) {

        $resultado = $num % 2;

        if($resultado == 0) {
            echo "$num é par<br>";
        } else {
            echo "$num é ímpar<br>";
        }
    }

    imparPar(5);
    imparPar(10);
    imparPar(45264526741867);