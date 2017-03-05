<?php require_once("conexao.php");


function listaInteresse($conexao){
	$interesse_array = array();
	$query = "select * from interesse";
	$resultado = mysqli_query($conexao, $query);
	while ($interesse = mysqli_fetch_assoc($resultado)) {
		array_push($interesse_array, $interesse);
	}

	return $interesse_array;
}
