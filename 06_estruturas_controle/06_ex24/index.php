<?php

$int = 7;
$str = "Thiago";
$bool = 7.77;

$msg = " é inteiro <br>";
$msg2 = " não é inteiro <br>";

//Var1
if (is_int($int)) {

    echo $int . $msg;

} else {

    echo $int . $msg2;
}

//Var2
if (is_int($str)) {

    echo $str . $msg;

} else {

    echo $str . $msg2;
}

//Var3
if (is_int($bool)) {

    echo $bool . $msg;

} else {

    echo $bool . $msg2;
}