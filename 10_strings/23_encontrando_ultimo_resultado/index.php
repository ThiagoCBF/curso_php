<?php

    $str = "Testando encontro palavra teste, em uma string que tem teste";

    $palavra = strrpos($str, "teste");

    echo "$palavra <br>";

    $palavra2 = strpos($str, "teste");

    echo "$palavra2 <br>";

    $p = substr($str, strpos($str, "teste"), 5);

    echo "$p <br>";