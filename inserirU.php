<?php
if (!isset($_POST["nome"])) {
    header("Location: acesso.php");
    exit();
}
?>
<?php
include 'conecta.php';

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$cadastrado = false;
$duplicado = false;

// Verificando se o usuário já existe
$sql = "SELECT nome FROM acesso WHERE nome = ?";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "s", $nome);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {

    $duplicado = true;
    mysqli_stmt_close($stmt);

} else {

    mysqli_stmt_close($stmt);

    // Gerando o hash da senha
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
}
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

                <a href="acesso.php">Cadastrar um novo Usuário</a>
                <a href="index.php">Entrar</a>

            </div>
        </div>

    <?php } else {
    header("refresh:200;url=acesso.php");
         ?>

        <p id="carregar">Usuário já existente. Retornando ao cadastro...</p>
        <div class="carregarP">
            <div class="carregarF"></div>
            <div class="carregarF2"></div>
        </div>

    <?php } ?>

</body>

</html>