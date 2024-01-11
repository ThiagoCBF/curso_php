<?php

 $teste = 'abc';

 if(5 > 2) {

    $teste = "def";

    echo "$teste if <br>";

 }

 echo "$teste global 2 <br>";


 function funcao() {

    $teste = "hij";    

    echo "$teste local <br>";
 }

 funcao();

 function testando_global() {

    global $teste; 

    $teste = 2;

    echo "$teste global função <br>";
 }

 testando_global();

 echo "$teste global 3<br>";