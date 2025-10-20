<?php
$salario = $_GET['salario'];
$vendas = $_GET['vendas'];
$comissao = $vendas * 0.04;
$salarioFinal = $salario + $comissao;


if ($salario && $vendas <=0){
    echo ("Insira um valor válido");

}
else{
    echo ("Salário: " . "R$" . $salario);
    echo ("<br>");
    echo ("Vendas: " . "R$" . $vendas);
    echo ("<br>");
    echo ("Comissão(%4): " . "R$" . $comissao);
    echo ("<br>");
    echo ("<br>");
    echo ("Salário Final: " . "R$" . $salarioFinal);
    echo ("<br>");
}




?>