<?php


$servidor = "Localhost";
$usuario = "root";
$senha = "root";
$banco = "crud";

$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);


?>