<?php

    $arr = ["Arroz", "Feijão", "Salada", "Batata"];

    $str = implode(", ", $arr);

    echo "$str <br>";

    $arr2 = ["Carro", "Moto", "Avião", "Caminhão"];

    $str2 = implode(" <-> ", $arr2);

    echo "$str2 <br>";