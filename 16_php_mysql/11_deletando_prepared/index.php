<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli($host, $user, $pass, $db);

    $nome = "Suporte de microfone";

    $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

    $stmt->bind_param("s", $nome);

    $stmt->execute();

    $conn->close();