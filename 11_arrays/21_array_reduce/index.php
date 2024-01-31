<?php

    $arr = [1, 2, 3, 4, 19 ,234];

    function soma($a ,$b) {
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado <br>";

    function sub($a ,$b) {
        return $a - $b;
    }

    $resultado2 = array_reduce($arr, "sub");

    echo "$resultado2 <br>";
