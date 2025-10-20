<?php
$numero = $_POST['num'];
if (($numero <= 0) || ($numero > 10)){
    echo "Insira um número válido";
}
else{
    file_put_contents("resultado.txt","");
    file_put_contents("resultado.txt","Tabuada do $numero: \n", FILE_APPEND);
    
    
    for ($i = 1; $i <=10; $i++){
        $resultado = $numero * $i;
        file_put_contents("resultado.txt","$numero x $i = $resultado\n", FILE_APPEND);
}}

$arquivoAberto = file_get_contents("resultado.txt");
echo nl2br($arquivoAberto);

?>