<?php

    $preco = (float)$_GET['preco'];
    $distribuidor =0;
    $imposto =0;
    $acrecimo =0;
    $precoFinal =0;

    if ($preco <= 0) {
        echo "Insira um valor válido";
        exit();
    }
    
    else if ($preco <= 39999.99) {

        $distribuidor = $preco * 0.05;
        $imposto =0;
    }

    else if ($preco <= 69999.99) {

        $distribuidor = $preco * 0.10;
        $imposto =$preco * 0.15;
    }
    else if ($preco >= 69999.99) {

        $distribuidor = $preco * 0.15;
        $imposto =$preco * 0.20;
    }

    $acrecimo =$imposto+$distribuidor;

    $precoFinal = $preco+$acrecimo;

    printf("Valor Inicial: R$%.2f\n",$preco);
    echo '<br>';
    echo '<br>';

    printf("A porcentagem do Distribuidor foi de R$%.2f\n",$distribuidor);
    echo '<br>';
    echo '<br>';

    printf("O Imposto foi de R$%.2f\n",$imposto);
    echo '<br>';
    echo '<br>';

    printf("O acréscimo é de R$%.2f\n",$acrecimo);
    echo '<br>';
    echo '<br>';

    printf("O preço é final de R$%.2f\n",$precoFinal);
    echo '<br>';
    echo '<br>';


?>