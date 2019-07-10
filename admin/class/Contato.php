<?php

require_once("Conexao.php");

class Contato{
    public $nomeCli;
    public $emailCli;
    public $msgCli;

    public function InserirContato(){
        $query = "INSERT INTO contato (nomeCli, emailCli, msgCli) VALUES ('".$this->nomeCli."','".$this->emailCli."','".$this->msgCli."')";    
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
     /*Meto Listar */
     public function Listar(){
        $conn       = Conexao::LigarConexao();         
        $buscar     = $conn->prepare("SELECT * FROM contato ORDER BY contato.id DESC"); /* Selecionar a tabela Contato e lista-la em ordem Desc -> Decrescente ... sendo que toda esa ação esta na var BUSCAR*/
        $buscar     ->execute();
        $resultado  = $buscar->fetchAll(PDO::FETCH_ASSOC);
        return($resultado);

    }
}



?>