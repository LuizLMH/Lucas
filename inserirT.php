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
    if (!isset($_POST["nomeT"])) {
        header("Location: cadastrarT.php");
        exit();
    }
    include 'conecta.php';
    $nomeT = $_POST["nomeT"];
    $curso = $_POST["curso"];
    $turno = $_POST["Turno"];
    $dataI = $_POST["dataI"];
    $dataT = $_POST["dataT"];
    $professor = $_POST["professor"];
    // Continuar aqui  
    $sql = "INSERT INTO turmas (nomeTurma, curso, turno, inicio,termino, professor) VALUES ('$nomeT', '$curso','$turno', '$dataI','$dataT', '$professor')";
    if (mysqli_query($conexao, $sql)) {
    ?>
        <div class="inserirP">
            <div class="inserirF">
                <?php
                echo "<p>Turma Cadastrada!</p> <br>";
                ?>
                <a href="cadastrarT.php" class="r1">Cadastrar uma nova Turma</a>
                <a href="visualizarT.php" class="r2">Ver Turmas Cadastradas</a>
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