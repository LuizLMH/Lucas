<?php
include 'conecta.php';
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $nomeP = $_POST["nomeP"];
    $dataNP = $_POST["dataNP"];
    $telefoneP = $_POST["telefoneP"];
    $cpfP = $_POST["cpfP"];
    $salario = $_POST["salario"];
    $sql = "UPDATE professor SET nomeP='$nomeP', dataNP='$dataNP', telefoneP='$telefoneP', cpfP='$cpfP', salario=$salario where idProfessor=$id;";
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Professor atualizado com sucesso!</h1>";
        }
        header("refresh:2;url=visualizarP.php");
        } else {
    echo "<h1>Dados incompletos para atualização</h1>";
    header("refresh:2;url=visualizarP.php");   
}
