<?php

 $teste = True;
 
 if(is_bool($teste)) {
    echo "É um booleano 1 <br>";
 }

 if(is_bool(0)) {
    echo "É um booleano 2 <br>";
 }

 if(is_bool(false)) {
    echo "É um booleano1 <br>";
 }

 if(0 == False) {
    echo "0 é considerado falso <br>";
 }