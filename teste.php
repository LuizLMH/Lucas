<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="pagina.php" method="post">
        <input type="text" name="user" id="user" placeholder="Digite seu usuário">
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        <div class="lembraracesso">
            <input type="checkbox" name="lembrar" id="lembrar" value="Lembrar Acesso">
            <label for="lembrar"></label>
            <a href="esqueciS.html">Esqueci minha senha</a>
        </div>
        <input id="entrar" type="submit" value="Entrar">
    </form>
</body>

</html>