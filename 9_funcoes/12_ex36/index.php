<?php

    

    $arr = [];

    for($i = 0; $i <= 30; $i++) {

        array_push($arr, $i);

    }

    function teste($array) {

        $arrayRetorno = [];

        for($j = 0; $j < count($array); $j++) {
            if($array[$j] > 7) {

                array_push($arrayRetorno, $array[$j]);
            }
        }

        return $arrayRetorno;
    }

    $novoArray = teste($arr);

    print_r($novoArray);