<?php

    class Animal {
        
        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;

        }

        function latir() {
            return "Aauau <br>";
        }

        function latirForte() {
            return strtoupper($this->latir());

        }
    }


    $ragnar = new Animal;

    echo "O nome do animal é: $ragnar->nome <br>";

    $ragnar->escolherNome("Ragnar");

    echo "O nome do animal é: $ragnar->nome <br>";

    echo $ragnar->latir();
    echo $ragnar->latirForte();