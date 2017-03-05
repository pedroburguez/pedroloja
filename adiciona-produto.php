<?php require_once("cabecalho.php"); 
require_once("banco-produto.php");
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];
$interesse_id = $_POST['interesse_id'];
$quantidade = $_POST['quantidade'];

if (insereProduto($conexao, $produto, $preco, $interesse_id, $quantidade, $tipo)) { ?>
	<p class="alert-sucess">O produto <?= $produto?> foi adicionado com sucesso!</p>
<?php  }else{  ?>
	<p>O produto não pode ser adicionado</p>
<?php 
}

require_once("rodape.php");
 ?>



