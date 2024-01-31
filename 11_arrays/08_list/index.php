<?php

    //Criando Variaveis por Meio de Array

    $pessoa = ["Thiago", 19, "Brasileiro", "Castanho"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $nacionalidade, $corOlhos) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$nacionalidade <br>";
    echo "$corOlhos <br>";