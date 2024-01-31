<?php

    $arr1 = [1, 2, 3];
    $arr2 = [10, 20, 30];
    $arr3 = [100, 200, 300];
    $arr4 = ["a", "b", "c"];

    $arrMerge = array_merge($arr1, $arr2, $arr3, $arr4);

    print_r($arrMerge);
    echo "<br>";