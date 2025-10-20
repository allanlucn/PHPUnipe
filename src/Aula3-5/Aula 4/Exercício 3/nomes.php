<?php
$nome = $_POST['nome'];
$encontrou = false;

$lista = array("Allan","Eduardo","Diogo","Letícia","Neriolando");

foreach ($lista as $nomeLista){
    if ($nome == $nomeLista){
        $encontrou = true;
        break;
    }
}

if ($encontrou == true){
    echo "O nome $nome está na lista";
}else{
    echo "O nome $nome não está na lista";
}
?>