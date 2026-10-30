<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="fundo">
        <div class="index">
            <div class="boxesquerda">
                <div class="iniciocentro">
                    <h1>
                        Sistema de Gestão Acadêmica
                    </h1>
                    <br>
                    <p>Gerêncie alunos, turmas, professores e acompanhe as principais informações do sistema de forma
                        prática,
                        organizada e moderna.</p>
                </div>
            </div>
            <div class="direita">
                <div class="formulariodireita">
                    <div class="texto">
                        <h1>Acessar Sistema</h1>
                        <p>Informe seus dados para acessar o sistema</p>
                    </div>
                    <form action="inicio.php" method="post">
                        <input type="text" name="user" id="user" placeholder="Digite seu usuário">
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                        <div class="lembraracesso">
                            <input type="checkbox" name="lembrar" id="lembrar" value="Lembrar Acesso">
                            <label for="lembrar"></label>
                            <a href="esqueciS.php">Esqueci minha senha</a>
                        </div>
                        <input id="entrar" type="submit" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>