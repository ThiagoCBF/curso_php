<?php

    $lista = [
        "Thiago" => 9.5,
        "Cristiano" => 7.7,
        "Ana" => 4.3,
        "Maria" => 1.2
    ];

    arsort($lista);

?>

<table border  = "3">
    <tr>
        <td>Ranking</td>
        <td>Pontuação</td>
    </tr>
    <?php foreach($lista as $nome => $ponto): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $ponto; ?></td>
    </tr>
    <?php endforeach; ?>
</table>