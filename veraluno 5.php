<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Aluno</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body id="paginadoaluno">
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages4">
        <a href="inicio.php" class="p2">Dashboard</a>
        <a href="cadastrarAl.php" class="p3">Cadastrar Alunos</a>
        <a href="visualizarAl.php" class="p4">Visualizar Alunos</a>
        <a href="cadastrarT.php" class="p6">Cadastrar Turmas</a>
        <a href="visualizarT.php" class="p7">Visualizar Turmas</a>
        <a href="index.php" id="sair">sair</a>
    </div>
    <div class="aluno">
        <p>Dados do Aluno</p>
        <table>
            <tr id="tabelaAA">
                <td>CPF</td>
                <td>Data de Nasc.</td>
                <td>Telefone</td>
                <td>Nome do Pai</td>
                <td>Nome da Mãe</td>
                <td>Cidade</td>
                <td>Endereço</td>
                <td>Turma</td>
                <td>Status</td>
            </tr>
            <tr>
                <td>123.456.789-10</td>
                <td>14/03/2007</td>
                <td>(99)99999-8888</td>
                <td>Carlos Roberto Oliveira</td>
                <td>Maria Aparecida Oliveira</td>
                <td>Setubinha/MG</td>
                <td>Rua das Flores, 01 - centro</td>
                <td>Desenvolvimento Web</td>
                <td id="ativo">Ativo</td>
            </tr>
        </table>
    </div>
</body>

</html>