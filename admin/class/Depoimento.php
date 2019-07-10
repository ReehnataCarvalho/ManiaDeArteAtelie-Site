<?php

require_once("Conexao.php");

class Depoimento{
	
	public $id;
    public $nomeCli;
    public $email;
    public $endereco;
    public $numPedido;
    public $notaProd;
    public $textoDepo;
	
    /* Metodo Inserir*/
    public function InserirDepoimento(){
		
        $query = "INSERT INTO depoimentopg (nomeCli, email, endereco, numPedido, notaProd, textoDepo) VALUES ('".$this->nomeCli."','".$this->email."','".$this->endereco."','".$this->numPedido."','".$this->notaProd."','".$this->textoDepo."')";    
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
    /* Metodo Listar */
    public function Listar(){
        $conn       = Conexao::LigarConexao();         
        $buscar     = $conn->prepare("SELECT * FROM depoimentopg ORDER BY depoimentopg.id DESC"); /* Selecionar a tabela Contato e lista-la em ordem Desc -> Decrescente ... sendo que toda esa ação esta na var BUSCAR*/
        $buscar     ->execute();
        $resultado  = $buscar->fetchAll(PDO::FETCH_ASSOC);
        return($resultado);

    }
    	/* Metodo Excluir */
	public function Excluir(){	
		$query ="DELETE FROM depoimentopg WHERE depoimentopg.id =".$this->id;
		$conn = Conexao::LigarConexao();
		$conn -> exec($query);
		
	// echo"<script>document.location='index.php?p=depoimento'</script>";
    }
    /* Metodo Atualizar
	public function Atualizar(){
		
        $query = "UPDATE depoimentopg SET nomeCli = '".$this->nomeCli."', email = '".$this->email."', endereco = '".$this->endereco."', numPedido = '".$this->numPedido."', notaProd = '".$this->notaProd."', textoDepo = '".$this->textoDepo"' WHERE depoimentopg.id = ".$this->id;  		
		
		
		$conn = Conexao::LigarConexao();
		$conn -> exec($query);

	}*/
}


?>