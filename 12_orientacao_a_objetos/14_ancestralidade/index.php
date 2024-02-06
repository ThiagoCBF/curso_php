<?php

    class Humano {

    }

    class Animal {

    }

    class Programador extends Humano {

    }

    $thiago = new Humano;

    $galinha = new Animal;

    $felipe = new Programador;

    if($thiago instanceof Humano) {
        echo "Thiago é um humano <br>";
    }

    if($galinha instanceof Humano) {
        echo "Galinha é humano<br>";
    } else {
        echo "Galinha não é humano <br>";
    }

    if($felipe instanceof Programador) {
        echo "Felipe é um Programador <br>";
    }

    if($felipe instanceof Humano) {
        echo "Felipe é humano<br>";
    } else {
        echo "Felipe não é humano <br>";
    }