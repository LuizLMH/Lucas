<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Negado</title>
    <link rel="stylesheet" href="arquivo.css">
</head>
<body>
    <?php
    require_once "conectador.php";
    
    // Recebendo os dados do formulário
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    // Consultando o banco de dados
    $sql = "SELECT * FROM acesso WHERE nome = ?";
    
    $stmt = $conexao->prepare($sql);
$stmt->execute([$nome]);

// Recuperando os dados encontrados
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificando usuário e senha
if ($dados && password_verify($senha, $dados['senha'])) {
    
    session_start();
    
    $_SESSION['nome'] = $dados['nome'];

    header("Location: inicio.php");
    
    } else {
        ?>
    <div class="userP">
        <div class="userF">
    <?php
    echo "<p>Usuário ou senha incorretos!<br>Redirecionando...</p>";
    echo '<meta http-equiv="refresh" content="3;url=index.php">';
    }
    ?>
    </div>
</div>

</body>
</html>