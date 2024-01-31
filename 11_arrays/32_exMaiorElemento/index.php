<?php

    $lista = [1, 2, 3, 4, 10];

    function maiorElemento($x) {
        rsort($x);
        $y = $x[0];
        return $y;
    }

    $z = maiorElemento($lista);
    echo $z;