<?php

    $arr = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12],
        [13, 14, 15, 16],
    ];

    for($i = 0; $i < count($arr); $i++) {

        for($j = 0; $j < count($arr); $j++) {

            echo $arr[$i][$j] . "<br>";

        }

        echo "Esta mudando de array <br>";
    }