<?php

    class Pessoa {

        public $nome = "Thiago";
        public $idade = 19;

        function andar($m) {
            echo "A pessoa andou $m metros <br>";
        } 
    }

    $thiago = new Pessoa;

    echo "O nome dele é $thiago->nome e tem $thiago->idade anos<br> ";

    $thiago->andar(120);

    $felipe = new Pessoa;

    $felipe->nome = "Felipe";
    $felipe->idade = 25;

    echo "O nome dele é $felipe->nome e tem $felipe->idade anos<br> ";

    $felipe->andar(45);


