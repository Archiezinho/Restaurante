<?php
include '../classes/conexao.php';

class Pesquisa_pratos extends conexao{
    public function pesquisaDB($nome){
        $nomeLike='%'. $nome .'%';
        $crud=$this->conectaDB()->prepare('select * from pratos where nome like :nome');
        $crud->bindValue(':nome',$nomeLike);
        $crud->execute();
        return $f=$crud->fetchAll();
    }
}
?>