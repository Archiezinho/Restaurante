<?php
session_start();
require_once '../classes/conexao.php';
require_once '../classes/pratos.php';


if (isset($_POST['nprato'])){
    $id = 1;
    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $codigo = $_POST['codigo'];
    $nome = $_POST['nprato'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $caloria = $_POST['caloria'];
    $destaque = $_POST['destaque'];
    $imagem = $_FILES['imagem'];

    $dir = '../img/cardapio/';

    $imagem['name'] = $codigo.'.jpg';

    if(move_uploaded_file($imagem['tmp_name'], "$dir".$imagem['name'])){
        echo 'Arquivo enviado com sucesso';
    }else{
        echo 'Erro, o arquivo não atende os requisitos';
    }

    $A = new pratos($id, $codigo, $nome, $categoria, $descricao, $preco, $caloria, $destaque);
}


$delete = isset ($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset ($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset ($_POST['btnSend']) ? $_POST['btnSend'] : "";

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