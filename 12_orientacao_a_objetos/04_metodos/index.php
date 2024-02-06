<?php

    class Pessoa {

        function falar() {
            echo "Olá, eu sou um objeto! <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }

    }

    $matheus = new Pessoa;

    $matheus->falar();

    $thiago = new Pessoa;

    $thiago->falar();

    $matheus->somar(10, 5);
    $thiago->somar(6, 4);