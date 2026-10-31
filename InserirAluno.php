<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Aluno</title>
</head>
<body>
    <?php
    if(!isset($_POST["nome"])){
        header("Location: cadastrarAl.php");
        exit();
    }
    include 'conecta.php';
    $nome=$_POST["nome"];
    $nomeP=$_POST["pai"];
    $nomeM=$_POST["mae"];
    $cpf=$_POST["cpf"];
    $dataN=$_POST["dataN"];
    $telefone=$_POST["telefone"];
    $bairro=$_POST["bairro"];
    $endereco=$_POST["endereco"];
    $numero=$_POST["numero"];
    $cidade=$_POST["cidade"];
    $turma=$_POST["select"];
    $sql = "INSERT INTO alunos (nomeCompleto, dataNascimento, telefone, cpf, nomePai, nomeMae, turma) VALUES ('$nome', '$dataN', '$telefone', '$cpf', '$nomeP', '$nomeM', '$turma')";
    if(mysqli_query($conexao, $sql)){
        echo "Dados inseridos";
    }else{
        echo "erro ao inserir dados no sistema";
    }
    ?>
</body>
</html>