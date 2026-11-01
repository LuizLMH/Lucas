<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Cursos</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <?php
    if (!isset($_POST["nomeC"])) {
        header("Location: cadastrarC.php");
        exit();
    }
    include 'conecta.php';
    $nomeC = $_POST["nomeC"];
    $cargaH = $_POST["cargaH"];
    $sql = "INSERT INTO cursos (nomeC, cargaH) VALUES ('$nomeC', '$cargaH')";
    if (mysqli_query($conexao, $sql)) {
    ?>
        <div class="inserirP">
            <div class="inserirF">
                <?php
                echo "<p>Curso Cadastrado!</p> <br>";
                ?>
                <a href="cadastrarC.php" class="r1">Cadastrar um novo Curso</a>
                <a href="visualizarC.php" class="r2">Ver cursos Cadastrados</a>
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