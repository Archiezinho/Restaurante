<?php
session_start();
require_once '../classes/conexão.php';
require_once '../classes/reserva.php';

if (isset($_POST['nome'])){
    $id = $_POST['id']: "";
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $mensagem = $_POST['mensagem'];
    $numeroPessoas = $_POST['numeroPessoas'];

    $A = new reserva($id, $codigo, $nome, $telefone, $email, $data, $mensagem, $numeroPessoas);
}


$delete = isset ($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset ($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset ($_POST['salvar']) ? $_POST['salvar'] : "";

if($delete){
    $A->deletar($conexao,$id);
}
if($alterar){
    $A->alterar($conexao,$id);
}
if($salvar){
    $A->insere($conexao);
}
?>