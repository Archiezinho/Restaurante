<?php

class pratos{
    private $id;
    private $codigo;
    private $nome;
    private $categoria;
    private $descricao;
    private $preco;
    private $caloria;
    private $destaque;

    function __construct($id, $codigo, $nome, $categoria, $descricao, $preco, $caloria, $destaque){
        this->id = $id;
        this->codigo = $codigo;
        this->nome = $nome;
        this->categoria = $categoria;
        this->descricao = $descricao;
        this->preco = $preco;
        this->caloria = $caloria;
        this->destaque = $destaque;
    }
    function setId($id){
        this->id = $id;
    }
    function setCodigo($codigo){
        this->codigo = $codigo;
    }
    function setNome($nome){
        this->nome = $nome;
    }
    function setCategoria($categoria){
        this->categoria = $categoria;
    }
    function setDescricao($descricao){
        this->descricao = $descricao;
    }
    function setPreco($preco){
        this->preco = $preco;
    }
    function setCaloria($caloria){
        this->caloria = $caloria;
    }
    function setDestaque($destaque){
        this->destaque = $destaque;
    }
    function getId(){
        return this->id;
    }
    function getCodigo(){
        return this->codigo;
    }
    function getNome(){
        return this->nome;
    }
    function getCategoria(){
        return this->categoria;
    }
    function getDescricao(){
        return this->descricao;
    }
    function getPreco(){
        return this->preco;
    }
    function getCaloria(){
        return this->caloria;
    }
    function getDestaque(){
        return this->destaque;
    }

    function insere($conexao){
        $query = "insert into pratos values('$this->codigo','$this->nome','$this->categoria','$this->descricao','$this->preco','$this->caloria','$this->destaque')";
        $conexao->query($query);
    }
    function alterar($conexao, $id){
        $query = "update pratos set codigo='$this->codigo' and nome='$this->nome' and categoria='$this->categoria' and descricao='$this->descricao' and preco='$this->preco' and caloria='$this->caloria' and destaque='$this->destaque' where id='$id'";
        $stmt=$conexao->query($query);
        $stmt->execute();
    }
    function deletar($conexao, $id){
        $query = "delete from pratos where id='$id'";
        $stmt=$conexao->query($query);
        $stmt->execute();
    }
}

?>