<?php
// Carregar as Informações do form pelo id 

require_once("class/Depoimento.php");
$id 	= $_GET["id"];
$depo 	= new Depoimento($id);

// Atualizar
if(isset($_POST["texto"])){
	
	
    $texto		= $_POST["texto"];
	$nomeCli	= $_POST["nomeCli"];  
	
    $depo	            = new Depoimento($id);								
    $depo->texto      	= $texto;
    $depo->nomeCli      = $nomeCli;
    $depo->Atualizar();		
}

?>

<h2>Atualizar Depoimento</h2>


		<form action="#" method="post">
			<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Nome Cliente:" value="<?php echo $row['nomeCli'] ?>"required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Email:"value="<?php echo $row['email'] ?>"required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder= "Cidade e estado:" value="<?php echo $row['endereco'] ?>"required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Numero do Pedido:"value="<?php echo $row['numPedido'] ?>"required>
			</div>
		<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Nota do Produto:" value="<?php echo $row['notaProd'] ?>"required>
			</div>
			<div>
				<textarea name="texto" class="form-control" cols="10" rows="20" placeholder="Texto do Depoimento" value="<?php echo $row['textoDepo'] ?>"required></textarea>
			</div>
			<div>
				<input type="submit" value="ENVIAR">
			</div>
	</form>




