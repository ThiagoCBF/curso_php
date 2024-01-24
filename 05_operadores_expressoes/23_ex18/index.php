<?php


    if(12 < 5 || "João" === "João") {
        echo "False OR True <br>";  // OR Apenas 1 True
    }

    if(1 > 5 || 1) {
        echo "False OR True <br>"; // OR Apenas 1 True
    }

    if(20 === "20" && 51 >= 31) {
        echo "False AND True <br>"; // AND todas True 
    }