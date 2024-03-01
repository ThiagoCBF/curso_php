<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 4;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id);
    
    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();

    print_r($data);