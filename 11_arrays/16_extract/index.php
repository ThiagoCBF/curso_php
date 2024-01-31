<?php

    $arr = [
        "cor" => "vermelho",
        "forma" => "redonda",
        "material" => "madeira"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Thiago";

    $pessoa = [
        "nome" => "Cristiano",
        "idade" => 19,

    ];

    echo "$nome <br>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";