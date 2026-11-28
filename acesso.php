<?php
session_start();
if (!isset($_SESSION["nome"])) {
    header("Location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body id="globo">
    <div class="alinhar">
        <div class="Ecentro">
            <h1>Crie sua conta</h1>
            <form action="inserirU.php" method="post">
                <input type="text" name="nome" id="senha" placeholder="Digite seu nome de usuário" required>
                <input type="password" name="senha" id="senha" placeholder="Crie sua senha" required>
                <input type="submit" value="Confirmar">
                <input type="reset" value="Limpar">
                <a href="sair.php" class="bnt">Cancelar</a>
            </form>
        </div>
    </div>
</body>

</html>