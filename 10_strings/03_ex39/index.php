<?php

    $objetos = ["Carro" => 350, "Sofá" => 30, "Cafeteira" => 8, "Caneta" => 2];



    function teste($objetos) {

        $arrItensCaros = [];

        foreach($objetos as $item => $preco) {

            if($preco > 10) {

                array_push($arrItensCaros, $item);


            }
        }

       return $arrItensCaros;
        
    
    }

    $novoArr = teste($objetos);

    var_dump($novoArr);