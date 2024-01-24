<?php

    $j = 0;
    $teste = "Thiago";

    do {
        echo "Testnado do while $j <br>";

        $j++;

    } while($j < 10);


    $i = 10;

    do {

        echo "Testando do while 2 $i <br>";

        

        if($j == 2) {
            echo "$teste <br>";
        }

        $i--;
    } while($i > 0);