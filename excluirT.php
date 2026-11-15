<?php
include 'conecta.php';
if (isset($_GET["idTurmas"]) && is_numeric($_GET["idTurmas"])) {
    $id = $_GET["idTurmas"];
    $sql = "DELETE FROM turmas WHERE idTurmas = $id";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Turma excluida com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao excluir Turma";
    }
    header("refresh:2; url=visualizarT.php");
} else {
    echo "<h1>ID inválido.</h1>";
    header("refresh:2;url=visualizarT.php");
}
