<?php
$frase1 = $_POST['frase1'];
$frase2 = $_POST['frase2'];
$frase3 = $_POST['frase3'];


if (empty($frase1) || empty($frase2) || empty($frase3)){
    echo "Preencha todas as frases";
}
else{
    $arquivo = fopen("frases.txt","w");
    fwrite($arquivo,"---Frases Salvas---\n");
    fwrite($arquivo,"1. $frase1\n");
    fwrite($arquivo,"2. $frase2\n");
    fwrite($arquivo,"3. $frase3\n");
    fclose($arquivo);

    $conteudo = file_get_contents("frases.txt");
    echo nl2br($conteudo);

}



?>