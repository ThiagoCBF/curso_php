<?php

    $data = new DateTime();

    print_r($data);
    echo "<br>";

    $data->setDate(2004, 06, 29);

    print_r($data);
    echo "<br>";

    $data->setTime(0, 01, 02);

    print_r($data);
    echo "<br>";

    echo $data->format('d/m/y') . "<br>";
