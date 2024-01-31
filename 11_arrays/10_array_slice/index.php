<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 9, 10];

    $slice1 = array_slice($arr, 1, 3);

    print_r($slice1);
    echo "<br>";

    $slice2 = array_slice($arr, 4, 4);

    print_r($slice2);
    echo "<br>";

    $slice3 = array_slice($arr, 4);

    print_r($slice3);
    echo "<br>";


    $slice4 = array_slice($arr, 4, -2);

    print_r($slice4);
    echo "<br>";
    