<?php
include 'conecta.php';
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $nomeP = $_POST["pai"];
    $nomeM = $_POST["mae"];
    $cpf = $_POST["cpf"];
    $dataN = $_POST["dataN"];
    $turma = $_POST["turma"];
    $telefone = $_POST["telefone"];
    $curso=$_POST["curso"];
    $sql = "UPDATE aluno SET nomeCompleto='$nome', nomePai='$nomeP', nomeMae='$nomeM', cpf='$cpf', dataNascimento='$dataN', idturma='$turma', telefone='$telefone', idcurso='$curso' WHERE idAluno='$id';";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Aluno atualizado com sucesso!</h1>";
    }
    header("refresh:2;url=visualizarAl.php");
} else {
    echo "<h1>Dados incompletos para atualização</h1>";
    header("refresh:2;url=visualizarAl.php");   
}
