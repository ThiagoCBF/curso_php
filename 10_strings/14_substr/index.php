<?php

    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5);

    echo $str . "<br>";
    echo $minha;

    $str2 = "Testando esta string abc";

    $novaString = substr($str2, 8); // Omitir comprimento = pegar ate o fim

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3); // Comprimento Negativo = REMOVER DO ULTIMO iNdice

    echo $novaString2 . "<br>";