<?php
<<<<<<< HEAD

define('HOST','localhost');
define('USUARIO','root');
define('SENHA','');
define('DB','db_restaurante');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possível se conectar');

=======
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
>>>>>>> 9819bb93eb6deb7edd97975ddf36fd7446eeb7d7
?>