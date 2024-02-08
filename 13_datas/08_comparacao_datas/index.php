<?php

   $dataA = new DateTime();
   $dataB = new DateTime();

   $dataC = new DateTime();

   $dataB->setDate(2004, 06, 29);
   $dataC->setDate(2004, 06, 29);


   $dataB->setTime(0, 0, 0);
   $dataC->setTime(0, 0, 0);

   if($dataB > $dataA) {
    echo "A data B é maior que a data A <br>";
   }

   if($dataA > $dataB) {
    echo "A data A é maior que a data B <br>";
   }

   if($dataB == $dataC) {
    echo "A data B e C são iguais <br>";
   }
