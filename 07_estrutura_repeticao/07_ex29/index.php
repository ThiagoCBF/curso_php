<?php

    $a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $c = 0;

    while($c < count($a)) {

        if($a[$c] == 30 || $a[$c] == 40) {
            echo "Pulando <br>";
            $c++;
            continue;
        }

        echo $a[$c] . "<br>";
        $c++;
        
    }


