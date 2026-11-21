<?php
include 'conecta.php';
if (isset($_GET["idAluno"]) && is_numeric($_GET["idAluno"])) {
    $id = $_GET["idAluno"];
    $sql = "DELETE FROM aluno WHERE idAluno = $id";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Aluno excluido com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao excluir aluno";
    }
    header("refresh:2; url=visualizarAl.php");
} else {
    echo "<h1>ID inválido.</h1>";
    header("refresh:2;url=visualizarAl.php");
}
