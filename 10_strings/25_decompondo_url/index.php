<?php

    $url = "https://www.google.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);
    echo "<br>";

    echo $arrayUrl["host"];
    echo "<br>";

    $url2 = "http://www.horadecodar.com.br/?busca=php";

    $arrayUrl2 = parse_url($url2);

    print_r($arrayUrl2);
    echo "<br>";
