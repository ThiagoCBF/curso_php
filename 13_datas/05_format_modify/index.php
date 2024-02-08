<?php

    $data = new DateTime();

    echo $data->format('d/m/y') . "<br>";

    echo $data->format('D - M - Y') . "<br>";

    echo $data->format('l . F . Y') . "<br>";

    // data + 5 dias

    $data->modify('+5 days');

    echo $data->format('d/m/y') . "<br>";

    // data - 3 anos

    $data->modify('-3 years');

    echo $data->format('d/m/y') . "<br>";
