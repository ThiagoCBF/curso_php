<?php


    class Cachorro {
        public $patas;
        public $raca;
        public $nome;

        function __construct($patas, $raca, $nome) {
            $this->patas = $patas;
            $this->raca = $raca;
            $this->nome = $nome;
        }


    
        function caracteristicaCachorro() {
            echo "O $this->nome tem $this->patas patas e é da raça $this->raca <br>";
        }
        
    }

    $ragnar= new Cachorro(4, "Boxer", "Ragnar");
    $ragnar->caracteristicaCachorro();