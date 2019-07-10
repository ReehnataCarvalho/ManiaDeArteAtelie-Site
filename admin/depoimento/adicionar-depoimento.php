<?php


if(isset($_POST["texto"])){
	
    $texto		= $_POST["texto"];
	$nomeCli	= $_POST["nomeCli"]; 
	$email =$_POST["email"]; 
	$endereco =$_POST["endereco"]; 
	$numPedido=$_POST["numPedido"]; 
	$notaProd=$_POST["notaProd"]; 
	$textoDepo=$_POST["textoDepo"]; 
	

    require_once("class/Depoimento.php");

    $depo	            = new Depoimento();
	$depo->id				= $id	;
	$depo->	nomeCli				=	$nomeCli;
	$depo->	email				=	$email;
	$depo->	endereco				=	$endereco;
	$depo->	numPedido				=	 $numPedido;	
	$depo->	notaProd				=	$notaProd;	
	$depo->	textoDepo				=	$textoDepo;
    $depo->Inserir();		
	
	
	
	public $id;
    public $nomeCli;
    public $email;
    public $endereco;
    public $numPedido;
    public $notaProd;
    public $textoDepo;
}
?>

<h2>Adicionar Depoimento</h2>

	<form action="#" method="post">
			<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Nome Cliente:" required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Email:" required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder= "Cidade e estado:" required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Numero do Pedido:" required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Nota do Produto:" required>
			</div>
			<div>
				<textarea name="texto" class="form-control" cols="10" rows="20" placeholder="Texto do Depoimento" required></textarea>
			</div>
			<div>
				<input type="submit" value="ENVIAR">
			</div>
	</form>