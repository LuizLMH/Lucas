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
                <th>Turno</th>
                <th>Professor</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td>Informática Básica - A</td>
                <td>2026/01</td>
                <td>Noturno</td>
                <td>Maria Fernanda</td>
                <td id="ativo">Ativa</td>
                <td>
                    <button type="button" id="mais">Ver Mais</button>
                    <button type="button" id="edit">Editar</button>
                    <button type="button" id="zero">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>Banco de Dados - B</td>
                <td>2026/01</td>
                <td>Matutino</td>
                <td>Joâo Batista</td>
                <td id="ativo">Ativa</td>
                <td>
                    <button type="button" id="mais">Ver Mais</button>
                    <button type="button" id="edit">Editar</button>
                    <button type="button" id="zero">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>Desenvolvimento Web - C</td>
                <td>2026/01</td>
                <td>Noturno</td>
                <td>Carlos Henrique</td>
                <td id="inativo">Encerrada</td>
                <td>
                    <button type="button" id="mais">Ver Mais</button>
                    <button type="button" id="edit">Editar</button>
                    <button type="button" id="zero">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>Desenvolvimento Web - D</td>
                <td>2026/01</td>
                <td>Noturno</td>
                <td>Maria Fernanda</td>
                <td id="ativo">Ativa</td>
                <td>
                    <button onclick="window.location.href='pagina8.php'" id="mais">
                        Ver mais
                    </button>
                    <button type="button" id="edit">Editar</button>
                    <button type="button" id="zero">Excluir</button>
                </td>
            </tr>
        </table>
    </div>
    <div class="paginas">
        <form action="#" method="post">
            <!-- <table>
                <tr>
                    <td>
                        <input type="button" value="Anterior" id="antes">
                    </td>
                    <td>
                        <h1 id="atual">1</h1>
                    </td>
                    <td>
                        <h1>2</h1>
                    </td>
                    <td>
                        <h1>3</h1>
                    </td>
                    <td>
                        <input type="button" value="Próxima" id="depois">
                    </td>
                </tr>
            </table> -->
        </form>
    </div>
</body>

</html>