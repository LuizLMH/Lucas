<?php
include 'conecta.php';
if (isset($_GET["idProfessores"]) && is_numeric($_GET["idProfessores"])) {
    $id = $_GET["idProfessores"];
    $sql = "DELETE FROM professores WHERE idProfessores = $id";
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
