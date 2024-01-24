<?php

// $var1 =& var2;

 $x = 7;

 $y =& $x;
 echo "$x <br> $y";
 echo "<br>";

 //Mudando a referenciada
 $y = 15;

 echo "$x <br> $y";
 echo "<br>";
 
 //Mudando a referencia
 $x = 1;

 echo "$x <br> $y";
