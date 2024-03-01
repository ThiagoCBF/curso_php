<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli($host, $user, $pass, $db);

    //$q = "CREATE TABLE teste2 (nome VARCHAR(100), sobrenome VARCHAR(100))";

    $q = "DROP TABLE teste2";


    $conn->query($q);

    $conn->close();