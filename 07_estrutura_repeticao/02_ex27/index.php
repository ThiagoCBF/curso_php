<?php

    $y = [1, "Thiago", True, 8, "a", 2, False, 0.41, "b", 10];
    $x = count($y);
    $z = 0;


    while($z < $x) {

        if(is_string($y[$z])) {
            echo $y[$z] . "<br>";
        }

        $z = $z + 1;
    }

        