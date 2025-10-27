<h2>Lista de Clientes</h2>
<?php
$clientesLista = file_get_contents('usuarios.json');
$clientes = json_decode($clientesLista, true);

echo "<hr>";
foreach ($clientes as $cliente){
    echo ("ID: " . $cliente['id'] . "<br>");
    echo ("Nome: " . $cliente['nome'] . "<br>");
    echo ("Email: " . $cliente['email'] . "<br>");
    echo ("Senha: " . $cliente['senha'] . "<br><br>");

}
?>