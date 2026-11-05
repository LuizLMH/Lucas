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
                    <h1 id="cor">
                        Sistema de Gestão Acadêmica
                    </h1>
                    <br>
                    <p id="cor">Gerêncie alunos, turmas, professores e acompanhe as principais informações do sistema de forma
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
                    <form action="validarU.php" method="post">
                        <input type="text" name="nome" id="nome" placeholder="Digite seu usuário" required>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                        <div class="lembraracesso">
                            <input type="checkbox" name="lembrar" id="lembrar" value="Lembrar Acesso">
                            <label for="lembrar"></label>
                            <a href="acesso.php">Criar Conta</a>
                        </div>
                        <input id="entrar" type="submit" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>