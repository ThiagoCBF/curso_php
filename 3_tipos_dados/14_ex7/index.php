<?php

 $pessoa = ['nome' => 'Thiago', 'idade' => '19', 'altura' => 1.87, 'nacionalidade' => 'brasileiro'];
 print_r($pessoa);
 echo "<br><br>";
 
 $nome = $pessoa['nome'];
 $idade = $pessoa['idade'];

 if($idade >= 18) {
    echo "$nome é maior de idade<br>";
 
 } else {
    echo "$nome não é maior de idade<br>";
 }