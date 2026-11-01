<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Turmas</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <?php
    if (!isset($_POST["nomeP"])) {
        header("Location: cadastrarP.php");
        exit();
    }
    include 'conecta.php';
    $nomeP = $_POST["nomeP"];
    $dataNP = $_POST["dataNP"];
    $telefoneP = $_POST["telefoneP"];
    $cpfP = $_POST["cpfP"];
    $salario = $_POST["salario"];
    $sql = "INSERT INTO professores (nomeP, dataNP, telefoneP, cpfP, salario) VALUES ('$nomeP', '$dataNP','$telefoneP', '$cpfP','$salario')";
    if (mysqli_query($conexao, $sql)) {
    ?>
        <div class="inserirP">
            <div class="inserirF">
                <?php
                echo "<p>Professor Cadastrado!</p> <br>";
                ?>
                <a href="cadastrarP.php" class="r1">Cadastrar outro Professor</a>
                <a href="visualizarP.php" class="r2">Ver professores Cadastrados</a>
                <a href="index.php" id="sair">Sair</a>
            </div>
        </div>
    <?php

    } else {
        echo "erro ao inserir dados no sistema";
    }
    ?>
</body>

</html>