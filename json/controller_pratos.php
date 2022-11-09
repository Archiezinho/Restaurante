<?php
include 'pesquisa_pratos.php';

$nome = $_POST['nome'];
$pesquisa= new pesquisa_pratos();
$pesquisa->pesquisaDB($nome);
echo json_encode($retorno);

?>