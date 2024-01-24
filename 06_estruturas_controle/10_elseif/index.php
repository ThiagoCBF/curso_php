<?php

    //Caso1 if-Verdadeiro ElseIf-Verdadeiro
    if(10 > 5) {

        echo "Entrou no if 1<br>";

    } else if(10 > 6) {

        echo "Entrou no else if <br>";

    }


    //Caso2 if-Falso ElseIf-Verdadeiro
    if(4 > 5) {

        echo "Entrou no if <br>";

    } else if(10 > 6) {

        echo "Entrou no else if 2<br>";

    }

    //Caso3 if-Falso ElseIf-Falso Else-Verdadeiro
    if(4 > 5) {

        echo "Entrou no if <br>";

    } else if(2 > 6) {

        echo "Entrou no else if <br>";

    } else {

        echo "Entrou no else 3<br>";
    }