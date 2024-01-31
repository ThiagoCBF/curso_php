<?php

    $lista = [
        "Thiago" => 19,
        "Cristiano" => 52,
        "Ana" => 26,
        "Leticia" => 30

    ];


?>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
            <?php foreach($lista as $nome => $idade): ?>
                <tr>
                    <td><?= $nome; ?></td>
                    <td><?= $idade; ?></td>
                </tr>
            <?php endforeach; ?>
        
    </table>