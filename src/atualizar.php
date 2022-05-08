<?php 
require 'conexao.php';

$OldId = $_GET['OldId'];
$id = $_POST['codigo'];
$descricao = $_POST['descricao'];
$atualizar = $cn->query("UPDATE produto SET id = $id, descricao = '$descricao' WHERE id = $OldId");
header('location:index.php');

?>