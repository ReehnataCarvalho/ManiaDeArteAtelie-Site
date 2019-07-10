<?php

class Conexao{

    public static function LigarConexao(){

        $conn = new PDO("mysql:dbname=maa;host:localhost","root","");
        return $conn;
    }

}


?>