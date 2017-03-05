<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: lista-produto.php?removido=true");
die()
?>
<?php
include("rodape.php");
?>
