<?php

    $lista = [1, 2, 3, 4, 6, 7];

    function soma($x) {
        $z = array_sum($x);
        return $z;
    }

    $y = soma($lista);

    print_r($y);