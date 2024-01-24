<?php

    $vel_carro1 = 100;
    $vel_carro2 = 40;
    $vel_carro3 = 20;

    $vel_limite = 40;


    //Caso1
    if($vel_carro1 > $vel_limite) {

        echo "Você está Multado1 <br>";

    } else if($vel_carro1 = $vel_limite) {

        echo "Está na velocidade certa1 <br>";

    } else {

        echo "Está na velocidade correta1 <br>";

    }

    //Caso2
    if($vel_carro2 > $vel_limite) {

        echo "Você está Multado2 <br>";

    } else if($vel_carro2 == $vel_limite) {

        echo "Tome cuidado com sua velocidade2 <br>";

    } else {

        echo "Está na velocidade correta2 <br>";

    }


    //Caso3
    if($vel_carro3 > $vel_limite) {

        echo "Você está Multado3 <br>";

    } else if($vel_carro3 == $vel_limite) {

        echo "Tome cuidado com sua velocidade3 <br>";

    } else {

        echo "Está na velocidade certa3 <br>";

    }

