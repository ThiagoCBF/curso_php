<?php

    function teste() {
        $a = 0;
        $a++;

        echo"$a <br>";
    }

    teste();
    teste();
    teste();

    function teste_static() {
        static $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste_static();
    teste_static();
    teste_static(); 