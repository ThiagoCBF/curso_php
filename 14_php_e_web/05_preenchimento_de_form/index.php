<?php

    $usuario = [

        'nome' => 'Thiago',
        'idade' => 19,
        'nacionalidade' => "Brasileiro"
    ];

    if($usuario) {
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $nacionalidade = $usuario['nacionalidade'];

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>" >
        </div>
        <div>
            <input type="text" name="idade" placeholder="Digite seu idade" value="<?= $idade ?>" >
        </div>
        <div>
            <input type="text" name="nacionalidade" placeholder="Digite seu nacionalidade" value="<?= $nacionalidade ?>" >
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>