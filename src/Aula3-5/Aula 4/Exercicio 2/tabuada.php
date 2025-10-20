<?php
$num = $_POST['num'];

if (($num <= 0) || ($num > 10)){
    echo "Insira um número válido";
}
else{
    for ($i = 1; $i <=10; $i++){
        $resultado = $num * $i;
        echo "$num x $i = $resultado <br>";
    }
}

?>