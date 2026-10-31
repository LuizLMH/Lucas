<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina4</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
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
    <h1>Visualizar Aluno</h1>
    <p id="t">Lista de alunos cadastrados no sistema</p>
    <div class="pesquisa2">
        <form action="pagina4.html" method="get">
            <input type="search" id="busca" name="achar" placeholder="Pesquisar Aluno...">
            <input type="button" value="Novo Aluno">
        </form>
    </div>
    <table>
        <tr>
            <th>Nome </th>
            <th>CPF</th>
            <th>Data nasc.</th>
            <th>Turma </th>
            <th>Status </th>
            <th>Ações </th>
        </tr>
        <?php
        include 'conecta.php';
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_array($resultado)) {

        ?>
                <tr>
                    <td>
                        <?php
                        echo $linha["nomeCompleto"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $linha["cpf"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $linha["dataNascimento"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $linha["turma"];
                        ?>
                    </td>
                    <td id="ativo">Ativo</td>
                    <td>
                        <button onclick="window.location.href='veraluno 5.php'" id="mais">
                            Ver mais
                        </button>
                        <button type="button" id="edit">Editar</button>
                        <button type="button" id="zero">Excluir</button>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>