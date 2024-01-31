<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo "<br>";

    print_r($removidos);
    echo "<br>";

    $removidos2 = array_splice($arr2, 3);

    print_r($arr2);
    echo "<br>";

    print_r($removidos2);
    echo "<br>";

    $removidos3 = array_splice($arr3, 1, -1);

    print_r($arr3);
    echo "<br>";

    print_r($removidos3);
    echo "<br>";
