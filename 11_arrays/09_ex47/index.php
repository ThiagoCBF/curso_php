<?php

    $carro = ["Jaguar", 3.0, "Azul", 18, "Teto Solar", "Automático"];


    list($marca, $versao, $cor, $cavalos, $modificacao, $tipo) = $carro;

    echo $marca . "<br>";
    echo $versao . "<br>";
    echo $cor . "<br>";
    echo $cavalos . "<br>";
    echo $modificacao . "<br>";
    echo $tipo . "<br>";

    print_r($carro) . "<br>";