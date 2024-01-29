<?php

    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase); //delimitador

    print_r($fraseArray);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";

    $fraseBArray = explode(",", $fraseB);

    print_r($fraseBArray);
    echo "<br>";

    for($i = 0; $i < count($fraseBArray); $i++) {

        echo "$fraseBArray[$i] <br>";
    }
