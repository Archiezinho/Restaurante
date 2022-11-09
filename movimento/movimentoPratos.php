<?php
session_start();
require_once '../classes/conexão.php';
require_once '../classes/pratos.php';

if (isset($_POST['nome'])){
    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $caloria = $_POST['caloria'];
    $destaque = $_POST['destaque'];

    $A = new prato($id, $codigo, $nome, $categoria, $descricao, $preco, $caloria, $destaque);
}


$delete = isset ($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset ($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset ($_POST['salvar']) ? $_POST['salvar'] : "";

if($delete){
$A->deletar($conexao,$cod);
}
if($alterar){
    $A->alterar($conexao,$cod);
}
if($salvar){
    $A->insere($conexao);
}
?>