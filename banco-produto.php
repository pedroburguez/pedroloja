<?php require_once("conexao.php");

function insereProduto($conexao, $produto, $preco, $interesse_id, $quantidade, $tipo){
	$query = "insert into produto (nome, preco, interesse_id, quantidade, tipo) values ('{$produto}', {$preco}, {$interesse_id}, {$quantidade}, '{$tipo}')";
	return mysqli_query($conexao, $query);
}


function listaProduto($conexao){
	$produto_array = array();
	$resultado = mysqli_query($conexao, "select p.*, i.nome as interesse_nome from produto as p join interesse as i on i.id=p.interesse_id");

	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produto_array, $produto);
	}

	return $produto_array;
}



function removeProduto($conexao, $id) {
    $query = "delete from produto where id = {$id}";
    return mysqli_query($conexao, $query);
}
