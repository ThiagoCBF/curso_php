<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 14;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = "Sofá";
    $descricao = "Sofá semi novo, com madeira de carvalho";

    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error) {
        echo "ERRO: " . $stmt->error;
    }