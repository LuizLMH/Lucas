<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages3">
        <a href="inicio.php" class="p2">Dashboard</a>
        <a href="cadastrarAl.php" class="p3">Cadastrar Alunos</a>
        <a href="visualizarAl.php" class="p4">Visualizar Alunos</a>
        <a href="cadastrarT.php" class="p6">Cadastrar Turmas</a>
        <a href="visualizarT.php" class="p7">Visualizar Turmas</a>
        <a href="index.php" id="sair">sair</a>
    </div>
    <h1>Cadastrar Aluno</h1>
    <div class="topo">
        <p>Preencha os dados para realizar um novo cadastro</p>
        <p>Dados do Aluno</p>
    </div>
    <div class="tudo">
        <div class="formG">
            <form action="InserirAluno.php" method="post">
                <div class="cadpai">
                    <div class="cadT2">
                        <label for="Nome">Nome completo</label>
                        <input type="text" name="nome" id="Nome" placeholder="Nome Completo">
                        <label for="Nome pai">Nome do pai</label>
                        <input type="text" name="pai" id="pai" placeholder="Nome do Pai">
                        <label for="Nome Mãe">Nome da mãe</label>
                        <input type="text" name="mae" id="mae" placeholder="Nome da Mãe">
                        <label for="cpf">CPF</label>
                        <input type="number" name="cpf" id="cpf" placeholder="CPF">
                        <label for="Data">Data de nascimento</label>
                        <input type="date" name="dataN" id="dataN"
                            placeholder="Data de Nascimento">
                    </div>
                    <div class="cadT">
                        <label for="Tefefone">Telefone</label>
                        <input type="number" name="telefone" id="tefefone" placeholder="Telefone">
                        <label for="Bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" placeholder="Bairro">
                        <label for="Endereço">Endereço</label>
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço">
                        <label for="Numero">Número</label>
                        <input type="number" name="numero" id="numero" placeholder="Número">
                        <label for="Cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                        <label for="Select">Turma</label>
                        <select name="select" id="select">
                            <option>Selecione</option>
                            <option value="1">Informatica Básica</option>
                            <option value="2">Banco de Dados</option>
                            <option value="3">Lógica de Programação</option>
                            <option value="4">Desenvolvimento Web</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Cadastrar Aluno">
                <input type="reset" value="Cancelar">
            </form>
        </div>
    </div>
</body>

</html>