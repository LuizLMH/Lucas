<?php
include 'conecta.php';
if (isset($_POST["idAlunos"])) {
    $id = $_POST["idAlunos"];
    $nome = $_POST["nome"];
    $nomeP = $_POST["pai"];
    $nomeM = $_POST["mae"];
    $cpf = $_POST["cpf"];
    $dataN = $_POST["dataN"];
    $turma = $_POST["turm"];
    $telefone = $_POST["telefone"];
    $curso=$_POST["curso"];
    $sql = "UPDATE alunos SET nomeCompleto='$nome', nomePai='$nomeP', nomeMae='$nomeM', cpf='$cpf', dataNascimento='$dataN', turma='$turma', telefone='$telefone', curso='$curso';";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Aluno atualizado com sucesso!</h1>";
    }
    header("refresh:2;url=visualizarAl.php");
} else {
    echo "<h1>Dados incompletos para atualização</h1>";
    header("refresh:2;url=visualizarAl.php");   
}
