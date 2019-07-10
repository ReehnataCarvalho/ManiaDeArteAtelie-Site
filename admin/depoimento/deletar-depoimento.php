<h2>Depoimento Deletado com Sucesso</h2>

<?php 
	require_once("class/Depoimento.php");
	$id = $_GET["id"];
	$depoimento = new Depoimento();
	$depoimento->id = $id;
	$depoimento->Excluir();		
?>
