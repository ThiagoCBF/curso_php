<?php

    $nome = "Ragnar";
    $altura = 1.50;
    $cor = "Marrom";
    $tipoAnimal = "Cachorro";
    $raca = "Boxer";

    $animal = compact("nome", "tipoAnimal", "raca", "altura", "cor");

    foreach($animal as $caracteristicas => $values) {
        echo "$caracteristicas : $values <br>";
    }