<?php

    class Humano {

        public function falar() {
            echo "OLÁ";
        }
    }

    $thiago = new Humano;

    $teste = 7;

    if(is_object($thiago)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)) {
        echo "É um objeto <br>";

    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($thiago) . "<br>";

    if(method_exists($thiago, "falar")) {
        echo "MÉTODO EXISTE<br>";
    }

    if(method_exists($thiago, "aaa")) {
        echo "MÉTODO EXISTE";
    } else {
        echo "Não Existe Método";
    }