<?php
include_once ("topo.html");
include_once ("menu.php");
if (empty($_SERVER['QUERY_STRING'])) {
    $pagina_a_carregar = "principal.php";
    include_once ($pagina_a_carregar);
} else{
    $pagina_solicitada = $_GET['pg'];
    $pagina_a_carregar = $pagina_solicitada . ".php";
    include_once ($pagina_a_carregar);
}
include_once ("rodape.php");
?>