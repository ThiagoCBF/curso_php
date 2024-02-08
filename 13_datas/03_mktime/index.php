<?php

    $dataNascimento = mktime(02, 12, 30, 06, 29, 2004);

    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

    echo $dataNascimentoFormatada . "<br>";