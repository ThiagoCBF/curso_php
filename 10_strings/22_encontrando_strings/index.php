<?php

    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    $testeEncontrar = strpos($str, "strpos");

    echo "$testeEncontrar <br>";

    $testeEncontrar2 = strpos($str, "jj");

    if($testeEncontrar2 === false) {

        echo "Palavra não encontrada <br>";
    }