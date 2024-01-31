<?php

    $thiago = [
        "nome" => "Thiago",
        "idade" => 19,
        "nacionalidade" => "brasileiro"

    ];

    $cristiano = [
        "nome" => "Cristiano",
        "idade" => 51,
        "nacionalidade" => "argentino"

    ];

    foreach($thiago as $carac => $value) {

        echo "$carac => $value <br>";
    }

    foreach($cristiano as $carac => $value) {

        echo "$carac => $value <br>";
    }
