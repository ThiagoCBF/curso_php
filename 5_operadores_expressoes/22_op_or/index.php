<?php


    if(5 > 2 || 3 < 7) {
        echo "True e True <br>";
    }

    if(5 > 2 || 10 < 7) {
        echo "True e False <br>";
    }

    if(5 > 8 || 3 < 7) {
        echo "False e True <br>";
    }

    if(5 > 12 || 13 < 7) {
        echo "False e False<br>";
    }

    //OR + AND

    if((3 > 10 || 7 >= 5) && 6 > 5) {
        echo "(False OR True) AND True <br>";
    }