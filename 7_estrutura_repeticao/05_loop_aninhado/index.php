<?php


    $i = 0;

    while($i < 10) {

        echo "============ <br> Loop externo $i <br> ============ <br>";

        $j = 1;

        while($j <= 5) {

            echo "Loop interno $j <br>";

            $j++;

        }

        $i++;

    
    }

