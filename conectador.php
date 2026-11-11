<?php

$servidor = "localhost";
$banco = "escolaEM";
$usuario = "root";
$senha = "2003";

$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco;charset=utf8mb4",
    $usuario,
    $senha
);

?>