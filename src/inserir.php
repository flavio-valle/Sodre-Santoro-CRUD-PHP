<?php 
require 'conexao.php';

$id = $_POST['codigo'];
$descricao = $_POST['descricao'];

$inserir = $cn->query("INSERT INTO produto(id, descricao) values($id, '$descricao')");

header('location:index.php')

?>