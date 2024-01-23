<?php

    $arr = ["Feijão", "Arroz", "Maça", "Pera"];

    function add_item_lista($item) {

        $x = "Voce esta levando estes itens: ";

        for($i = 0; $i < count($item); $i++) {

            if($i + 1 == count($item)) {
                $x .= "$item[$i].";
            } else {
                $x .= "$item[$i], ";
            }

        }

        return $x;

    }

    echo add_item_lista($arr);