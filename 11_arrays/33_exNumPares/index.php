<?php

    $lista = range(1, 10);
    $y = [];

    function encontrarPares($x) {
        for($i = 0; $i < count($x); $i++) {
            if($x[$i] % 2 == 0) {
                $y[] = $x[$i];

            }
        }
        return $y;
    }


    $z = encontrarPares($lista);
    
    print_r($z);