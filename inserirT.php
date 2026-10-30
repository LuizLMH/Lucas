<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Turmas</title>
</head>
<body>
    <?php
    if(!isset($_POST["nomeT"])){
        header("Location: cadastrarT.php");
        exit();
    }
    include 'conecta.php';
    $nomeT=$_POST["nomeT"];
    $curso = $_POST["curso"];
    $turno=$_POST["Turno"];
    $dataI=$_POST["dataI"];
    $sql = "INSERT INTO cadTurmas (nomeTurma, curso, turno, inicio) VALUES ('$nomeT', '$curso','$turno', '$dataI')";
    if(mysqli_query($conexao, $sql)){
        echo "Dados inseridos";
    }else{
        echo "erro ao inserir dados no sistema";
    }
    ?>
</body>
</html>