<?php
    require_once("class/Depoimento.php");
    $depoimento = new Depoimento();
    $listar = $depoimento->Listar();
?>
<h2>Listar Depoimentos</h2>

<table class="table" border="1" cellpadding="10" cellspacing="5">

    <caption>Dados de Depoimentos</caption>

    <thead>
        <tr>
            <td>Id</td>
            <td>Nome Cliente</td>
            <td>Email</td>
            <td>Cidade e estado</td>
            <td>Numero do Pedido</td>
            <td>Nota do Produto</td>
            <td>Texto do Depoimento</td>
            <td>Atualizar</td>				
            <td>Deletar</td>

        </tr>
    </thead>

    <tbody>
        <?php foreach($listar as $row):?>			
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['nomeCli'] ?></td>
				<td><?php echo $row['email'] ?></td>
                <td><?php echo $row['endereco'] ?></td>
                <td><?php echo $row['numPedido'] ?></td>
                <td><?php echo $row['notaProd'] ?></td>
                <td><?php echo $row['textoDepo'] ?></td>
				<td><a href="index.php?p=depoimento&d=atualizar-depoimento">Atualizar</a></td>			
				<td><a href="index.php?p=depoimento&d=deletar-depoimento&id=<?php echo $row['id']?>">Deletar</a></td>
			</tr>			
		 <?php endforeach ?>             
        
    	</tbody>

    <tfoot>
    </tfoot>

</table>