<?php
        require 'conexao.php';

$id = $_GET['id'];
$excluir = $cn->query("DELETE FROM produto WHERE id = $id");
header('location:index.php');
?>