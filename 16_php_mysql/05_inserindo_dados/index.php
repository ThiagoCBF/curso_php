<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli($host, $user, $pass, $db);

    $table = "itens";
    $nome = "Xícara";
    $descricao = "É uma xícara usada de cor rosa";


    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();