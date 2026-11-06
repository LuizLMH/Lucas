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
                    <div class="textoIndex">
                        <h2 class="textoi">Acessar Sistema</h2>
                        <h4 class="textoi2">Informe seus dados para acessar o sistema</h4>
                    </div>
                    <div class="formIndex">
                        <form action="validarU.php" method="post">
                            <label for="nome">Nome de Usuário</label>
                            <input type="text" name="nome" id="nomeIndex" placeholder="Digite seu usuário" required>
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senhaIndex" placeholder="Digite sua senha" required>
                            <!-- <div class="lembraracesso">
                                <input type="checkbox" name="lembrar" id="lembrar" value="Lembrar Acesso">
                                <label for="lembrar"></label>
                                <a href="acesso.php">Criar Conta</a>
                            </div> -->
                            <input id="entrar" type="submit" value="Entrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>