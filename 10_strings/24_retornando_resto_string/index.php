<?php

    $str = "Testando o resto da string, pra ver se dá certo";

    $resto = strstr($str, "resto");

    echo "$resto <br>";


    if(strstr($str, "asdada") === false) {

        echo "Não encontramos a string!";
    }