<?php

define('HOST','localhost');
define('USUARIO','root');
define('SENHA','');
define('DB','db_restaurante');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possível se conectar');
?>


<?php

$host = 'mysql:host=localhost;dbname=db_restaurante';
$user = 'root';
$senha = '';

try{
    $conexao = new PDO($host,$user,$senha);
}
catch(PDOException $e){
    print_r($e);
}

?>