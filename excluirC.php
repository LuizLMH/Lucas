<?php
include 'conecta.php';
if (isset($_GET["idCursos"]) && is_numeric($_GET["idCursos"])) {
    $id = $_GET["idCursos"];
    $sql = "DELETE FROM cursos WHERE idCursos = $id";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Curso excluido com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao excluir curso";
    }
    header("refresh:2; url=visualizarC.php");
} else {
    echo "<h1>ID inválido.</h1>";
    header("refresh:2;url=visualizarC.php");
}
