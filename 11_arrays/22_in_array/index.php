<?php

    $arr = ["banana", "maçã", "batata", "pêra", "mamão"];

    if(in_array("batata", $arr)) {
        echo "Há o item batata no array";

    } else {
        echo "Não há batata no array";
    }

    echo "<br>";
    $banana = "banana";

    if(in_array($banana, $arr)) {
        echo "Há o item $banana no array";

    } else {
        echo "Não há $banana no array";
    }
