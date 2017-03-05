<?php 	require_once("cabecalho.php"); 
		require_once("banco-interesse.php");
		$interesse_array = listaInteresse($conexao);
?>
<h1>Adicione o produto!</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		<tr>
		<td>Nome</td>
		<td><input class="form-control" type="text" name="produto"></td>
		</tr>
		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="number" name="preco"></td>
		</tr>
		<tr>
			<td>Tipo</td>
			<td><input class="form-control" type="texte" name="tipo"></td>
		</tr>
		<tr>
			<td>Interesse</td>
			<td>
			<select name="interesse_id" class="form-control">
				<?php foreach ($interesse_array as $interesse) { ?>
					<option value="<?=$interesse['id']?>">
						<?=$interesse['nome']?><br/>
					</option>
				<?php }	?>
			</select>
			</td>
		<tr>
			<td>Quantidade</td>
			<td><input class="form-control" type="number" name="quantidade"></td>
		</tr>
			
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Adicionar</button></td>
		</tr>
	</table>
</form>
<?php require_once("rodape.php"); ?>