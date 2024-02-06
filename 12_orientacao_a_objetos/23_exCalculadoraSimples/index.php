<?php

    class Calculadora {

        function somar($a, $b) {
            return $a + $b;
        }

        function subtrair($a, $b) {
            return $a - $b;
        }

        function multiplicar($a, $b) {
            return $a * $b;
        }

        function dividir($a, $b) {
            return $a / $b;
        }
    }


    $x = new Calculadora;

    echo $x->somar(5, 10) . "<br>";
    echo $x->subtrair(50, 10) . "<br>";
    echo $x->multiplicar(30, 10) . "<br>";
    echo $x->dividir(20, 10) . "<br>";
