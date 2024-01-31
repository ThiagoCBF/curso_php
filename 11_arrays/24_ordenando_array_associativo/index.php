<?php

    $arr = [
        "Thiago" => 19,
        "Cristiano" => 51,
        "Pedro" => 7,
        "Ana" => 22
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

    $arr2 = [
        "Thiago" => 19,
        "Cristiano" => 51,
        "Pedro" => 7,
        "Ana" => 22
    ];

    arsort($arr2);

    print_r($arr2);
    echo "<br>";

    ksort($arr2);

    print_r($arr2);
    echo "<br>";

    krsort($arr2);

    print_r($arr2);
    echo "<br>";
