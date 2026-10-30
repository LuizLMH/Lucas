<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar turmas</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages7">
        <a href="inicio.php" class="p2">Dashboard</a>
        <a href="cadastrarAl.php" class="p3">Cadastrar Alunos</a>
        <a href="visualizarAl.php" class="p4">Visualizar Alunos</a>
        <a href="cadastrarT.php" class="p6">Cadastrar Turmas</a>
        <a href="visualizarT.php" class="p7">Visualizar Turmas</a>
        <a href="index.php" id="sair">sair</a>
    </div>
    <div class="verturmas">
        <h1>Visualizar Turmas</h1>
        <p>Lista de Turmas Cadastradas no Sistema</p>
        <form action="pesqisa.html" method="get">
            <input type="search" name="pesquisa" placeholder="pesquisar Turma...">
            <input type="submit" value="pesquisar">
        </form>
    </div>
    <div class="tabela">
        <table>
            <tr>
                <th>Turmas</th>
                <th>Semestre</th>
                <th>Carga Horária</th>
                <th>Turno</th>
                <th>Professor</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php
            include 'conecta.php';
            $sql = "SELECT * FROM cadastrosCursos";
            $resultado = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_array($resultado)) {
            ?>
                    <tr>
                        <td><?php $linha["nomeCurso"]; ?> </td>
                        <td>2026/01</td>
                        <td> <?php $linha["cargaH"]; ?> </td>
                        <td>Noturno</td>
                        <td>Maria Fernanda</td>
                        <td id="ativo">Ativa</td>
                        <td>
                            <button type="button" id="mais">Ver Mais</button>
                            <button type="button" id="edit">Editar</button>
                            <button type="button" id="zero">Excluir</button>
                        </td>
                    </tr>
        </table>
<?php
                }
            }
?>
    </div>
</body>

</html>