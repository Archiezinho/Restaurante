<?php

$host = 'mysql:host=localhost;dbname=restaurante';
$user = 'root';
$senha = '';

try{
    $conexao = new PDO($host,$user,$senha);
}
catch(PDOException $e) {
    print_r($e);
}

?>