<?php

$num1 = 51;
$var = 0;
$str = "Sete";

//Int
if(is_int($num1)) {

    $var = $num1 * 2;

    if($var > 100) {

        echo $var . " é maior que 100<br>";

    } else {

        echo $var . " não é maior que 100";

    }

} else {

    echo "Isso não é um número<br>";

}


//String
if(is_int($str)) {

    $var = $str * 2;

    if($var > 100) {

        echo $var . " é maior que 100<br>";

    } else {

        echo $var . " não é maior que 100";

    }

} else {

    echo "Isso não é um número<br>";

}