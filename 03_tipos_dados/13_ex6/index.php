<?php

 $ar = ["marca" => 'Lamborghini', 'modelo' => 'Veneno', 'peso' => 1.450, 'cor' => 'Prata'];
 print_r($ar);
 echo "<br><br>";

 $marca = $ar['marca'];
 $peso = $ar['peso'];
 $cor = $ar['cor'];

 echo "A marca do carro é $marca<br>";
 echo "Além disso , o carro posssui um peso de $peso, e sendo da cor $cor";

