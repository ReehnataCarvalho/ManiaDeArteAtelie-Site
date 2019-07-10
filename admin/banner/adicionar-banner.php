<?php

if(isset($_POST["titulo"])){ //  esta linha esta verificando se o titulo for passado faça algo .. 
	
    $titulo		= $_POST["titulo"];
	 // Receber Img
	$img		= $_FILES["img"];
	
	if(move_uploaded_file($img[tmp_name],"../img/".$img[name])){
		
		$endImg = $img[name]; // "http://localhost:8080/site-clinicapet/img/".
		
	}else{
		echo "Erro: de Imagem";		
	}
	
    require_once("class/Banner.php");
	
 	$ban	            = new Banner();
	$ban->img			= $endImg;
	$ban->titulo      	= $titulo;
    $ban->Adicionar();	
}
?>

<h2>Adicionar Banner</h2>

<form action="index.php?p=banner&b=adicionar-banner" method="post" class="form-group" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" ... serve para envio de imagens pois para subir ela inteira é mto ruim, sendo assim subir em pedaços é bem melhor-->
<div>
			<input name="img" class="form-control" type="file" placeholder="insira seu banner:" required>
			</div>
			<div>
				<input name="titulo" class="form-control" type="text" placeholder="Titulo do Banner:" required>
			</div>
			<div>
				<input type="submit" value="ENVIAR"> 	
			</div>
			
	</form>













           
