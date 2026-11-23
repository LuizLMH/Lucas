<?php
include 'conecta.php';
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $nomeT = $_POST["nomeT"];
    $turno=$_POST["turno"];
    $inicio=$_POST["dataI"];
    $termino=$_POST["dataT"];
    $idcurso=$_POST["curso"];
    $idprofessor=$_POST["professor"];
    $sala=$_POST["sala"];
    $ano=$_POST["ano"];
    $sql = "UPDATE turma SET nomeT='$nomeT', idcurso='$idcurso', turno='$turno', inicio='$inicio', termino='$termino', idprofessor='$idprofessor', sala='$sala', ano='$ano' WHERE idTurma=$id;";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Turma atualizada com sucesso!</h1>";
    }
    header("refresh:2;url=visualizarT.php");
} else {
    echo "<h1>Dados incompletos para atualização</h1>";
    header("refresh:2;url=visualizarT.php");   
}
