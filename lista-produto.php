<?php require_once("cabecalho.php");
		require_once("banco-produto.php");
?>

<?php if(array_key_exists("removido", $_GET) && $_GET["removido"]=='true') { 
?>
<p class="alert-success">Produto apagado com sucesso.</p>
<?php }
?>


<table class="table table-striped table-bordered">
			<tr>
				<td>NOME</td>
				<td>PREÇO</td>
				<td>TIPO</td>
				<td>INTERESSE</td>
				<td>QUANTIDADE</td>
				<td>DESEJA REMOVER?</td>
			</tr>		
<?php
	$produto_array = listaProduto($conexao);
	foreach ($produto_array as $produto) { ?>
			<tr>
				<td><?=$produto['nome']?></td>
				<td><?=$produto['preco']?></td>
				<td><?=$produto['tipo']?></td>
				<td><?=$produto['interesse_nome']?></td>
				<td><?=$produto['quantidade']?></td>
				<td>
					<form action="remove-produto.php" method="post">
           			 	<input type="hidden" name="id" value="<?=$produto['id']?>" />
            			<button class="btn btn-danger">remover</button>
        			</form>
        		</td>
			</tr>

<?php
}

?>
	</table>	


<?php require_once("rodape.php"); ?>