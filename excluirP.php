<?php
include 'conecta.php';
if (isset($_GET["idProfessor"]) && is_numeric($_GET["idProfessor"])) {
    $id = $_GET["idProfessor"];
    $sql = "DELETE FROM professor WHERE idProfessor = $id";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Professor excluido com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao excluir Professor";
    }
    header("refresh:2; url=visualizarP.php");
} else {
    echo "<h1>ID inválido.</h1>";
    header("refresh:2;url=visualizarP.php");
}
