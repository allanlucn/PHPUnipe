<?php

    $baseMaior = $_GET['base1'];
    $baseMenor = $_GET['base2'];
    $altura = $_GET['altura'];
    
    $areaTrapezio = (($baseMaior + $baseMenor) * $altura) /2;

    echo "Area do trapezio: $areaTrapezio";

?>