<?php

    $str = "Carro - Navio - Helicópetero - Barco - Jangada";

    $arr = explode("-", $str);

    for($i = 0; $i < count($arr); $i++) {

        echo "$arr[$i] <br>";
    }