<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Aluno</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <?php
    if (!isset($_POST["nome"])) {
        header("Location: cadastrarAl.php");
        exit();
    }
    include 'conecta.php';
    $nome = $_POST["nome"];
    $nomeP = $_POST["pai"];
    $nomeM = $_POST["mae"];
    $cpf = $_POST["cpf"];
    $dataN = $_POST["dataN"];
    $telefone = $_POST["telefone"];
    $bairro = $_POST["bairro"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $cidade = $_POST["cidade"];
    $turma = $_POST["select"];
    $sql = "INSERT INTO alunos (nomeCompleto, dataNascimento, telefone, cpf, nomePai, nomeMae, turma) VALUES ('$nome', '$dataN', '$telefone', '$cpf', '$nomeP', '$nomeM', '$turma')";
    if (mysqli_query($conexao, $sql)) {
    ?>
        <div class="inserirP">
            <div class="inserirF">
                <?php
                echo "<p>Aluno Cadastrado!</p> <br>";
                ?>
                <a href="cadastrarAl.php" class="r1">Cadastrar um novo Curso</a>
                <a href="visualizarAl.php" class="r2">Ver cursos Cadastrados</a>
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