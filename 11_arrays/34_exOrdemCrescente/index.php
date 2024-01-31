<?php

    $lista = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];

    function ordenarNumeros($x) {
        sort($x);
        return $x;

    }

    $y = ordenarNumeros($lista);
    print_r($y);