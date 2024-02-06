<?php

    class Humano {

        public $idade;
        public $nome;

        public function falar() {}

        public function andar() {}
    }

    if(class_exists("Humano")) {
        echo "A classe existe <br>";

    }

    if(class_exists("Caa")) {
        echo "A classe existe <br>";

    } else {
        echo "A classe não existe <br>";
    }

    print_r(get_class_vars("Humano"));
    print_r(get_class_methods("Humano"));