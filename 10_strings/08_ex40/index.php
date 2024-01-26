<?php

    $str = "O rato roeu a roupa do rei de Roma<br>";
    $contador = 0;

    for($i = 0; $i < strlen($str); $i++) {

        if($str[$i] === 'a') {
            $contador = $contador + 1;
        }

    
    }   

    echo $contador;