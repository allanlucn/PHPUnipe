<?php

    $valor = (float)$_GET['valor'];
    $tipoInvestimento = $_GET['tipoInvestimento'];
    $rendimento =0;
    $valorFinal =0;

    
    if($tipoInvestimento ==1 ){
        echo ("Poupança");
        echo ("<br>");
        echo ("Rendimento mensal :3%");
        echo ("<br>");
        $rendimento = 0.03;
        echo ("<br>");
    }
    elseif($tipoInvestimento ==2 ){
        echo ("Renda Fixa");
        echo ("<br>");
        echo ("Rendimento mensal :4%");
        echo ("<br>");
        $rendimento = 0.04;
        echo ("<br>");
    }

    $valorFinal = $valor + ($valor*$rendimento);

    printf("Depois de 1 mês, o investimento terá rendido R$%.2f",$valorFinal);
    echo ("<br>");





?>