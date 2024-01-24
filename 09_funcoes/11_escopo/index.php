<?php

    $a = 10;

    function testeEscopo() {

        $a = 5;

        global $b;

        static $c = 0;

        $a++;

        $b++;

        $c++;

        echo "ESCOPO LOCAL DE A: $a <br>";

        echo "ESCOPO GLOBAL DE B: $b <br>";

        echo "ESCOPO Static DE C: $c <br>";
    }

    echo "ESCOPO GLOBAL DE A: $a <br>";

    testeEscopo();
    testeEscopo();
