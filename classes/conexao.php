<?php
abstract class conexao{
    
    protected function conectaDB(){
        try{
            $conexao = new PDO('mysql:host=localhost;dbname=restaurante','root','');
            return $conexao;
        }
        catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>