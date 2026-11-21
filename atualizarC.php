<?php
include 'conecta.php';
if (isset($_POST["idcurso"])) {
    $id = $_POST["idcurso"];
    $nomeC = $_POST["nomeC"];
    $cargaH = $_POST["cargaH"];
    $sql = "UPDATE curso SET nomeC='$nomeC', cargaH='$cargaH' where idCurso='$id';";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Curso atualizado com sucesso!</h1>";
    }
    header("refresh:2;url=visualizarC.php");
} else {
    echo "<h1>Dados incompletos para atualização</h1>";
    header("refresh:2;url=visualizarC.php");   
}
