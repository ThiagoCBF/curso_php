<?php

 class Pessoa {

    function falar() {
        echo "Olá Pessoal!";
    }

 }

 $thiago = new Pessoa();

 $thiago->nome = "Thiago";

 echo $thiago->nome;

 echo"<br>";

 $thiago->falar();
 