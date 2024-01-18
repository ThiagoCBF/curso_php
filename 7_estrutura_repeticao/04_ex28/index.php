<?php


    $c = 4;

    while($c <= 30) {

        echo $c . "<br>";
        if($c == 24) {
            echo "Parando o Loop";
            break;
        }


        $c = $c + 2;
    }