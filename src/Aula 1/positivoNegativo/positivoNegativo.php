<?php

    $valor = $_POST['valor'];

    if ($valor < 0)
        echo "Menor que zero";
    else if ($valor == 0)
        echo "Igual a zero";
    else   
        echo "Maior que zero";
    


?>

