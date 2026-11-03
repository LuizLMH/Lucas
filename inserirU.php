
<?php
if (!isset($_POST["nome"])) {
    header("Location: acesso.php");
    exit();
}

include 'conecta.php';

$nome = $_POST["nome"];
$senha = $_POST["senha"];

// Criptografando a senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Preparando a inserção
$sql = "INSERT INTO acesso (nome, senha) VALUES (?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "ss", $nome, $senhaHash);

if (mysqli_stmt_execute($stmt)) {
    $cadastrado = true;
} else {
    $cadastrado = false;
}

mysqli_stmt_close($stmt);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>

    <?php if ($cadastrado) { ?>

        <div class="inserirP">
            <div class="inserirF">

                <p>Usuário Cadastrado</p>
                <br>

                <a href="acesso.php" class="r1">Cadastrar um novo Usuário</a>
                <a href="index.php" class="r2">Entrar</a>

            </div>
        </div>

    <?php } else { ?>

        <p>Erro ao inserir dados no sistema.</p>

    <?php } ?>

</body>
</html>
