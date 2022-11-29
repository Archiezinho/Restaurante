<?php

class reserva{
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $data;
    private $mensagem;
    private $numeroPessoas;

    function __construct($id, $nome, $telefone, $email, $data, $mensagem, $numeroPessoas){
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->data = $data;
        $this->mensagem = $mensagem;
        $this->numeroPessoas = $numeroPessoas;
    }
    function setId($id){
        $this->id = $id;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setData($data){
        $this->data = $data;
    }
    function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }
    function setNumeroPessoas($numeroPessoas){
        $this->numeroPessoas = $numeroPessoas;
    }
    function getId(){
        return $this->id;
    }
    function getNome(){
        return $this->nome;
    }
    function getTelefone(){
        return $this->telefone;
    }
    function getEmail(){
        return $this->email;
    }
    function getData(){
        return $this->data;
    }
    function getMensagem(){
        return $this->mensagem;
    }
    function getNumeroPessoas(){
        return $this->numeroPessoas;
    }

    function insere($conexao){
        $query = "insert into tb_reserva values('$this->nome','$this->telefone','$this->email','$this->data','$this->mensagem','$this->numeroPessoas')";
        $conexao->query($query);
        $conexao->close();
    }
    function alterar($conexao, $id){
        $query = "update tb_reserva set nome='$this->nome' and telefone='$this->telefone' and email='$this->email' and data='$this->data' and mensagem='$this->mensagem' and numeroPessoas='$this->numeroPessoas' where id='$id'";
        $conexao->query($query);
        $conexao->execute();
        $conexao->close();
    }
    function deletar($conexao, $id){
        $query = "delete from tb_reserva where id='$id'";
        $conexao->query($query);
        $conexao->execute();
        $conexao->close();
    }
}

?>