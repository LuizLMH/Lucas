<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Turmas</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages6">
        <a href="inicio.php" class="p2">Dashboard</a>
        <a href="cadastrarAl.php" class="p3">Cadastrar Alunos</a>
        <a href="visualizarAl.php" class="p4">Visualizar Alunos</a>
        <a href="cadastrarT.php" class="p6">Cadastrar Turmas</a>
        <a href="visualizarT.php" class="p7">Visualizar Turmas</a>
        <a href="index.php" id="sair">sair</a>
    </div>
    <h1>Cadastrar Turma</h1>
    <p>Dados da Turma</p>
    <form action="pagina.php" method="post">
        <div class="cadpai">
            <div class="cadT">
                <label for="turma">Turma</label>
                <input type="text" Nome da Turma placeholder="Nome da Turma" id="turma">
                <label for="Ano">Ano/Semestre</label>
                <input type="text" name="ano" id="Ano" placeholder="Ano/Semestre">
                <label for="Turno">Selecione o Turno</label>
                <select name="Turno" id="Turno">
                    <option>Selecione o Turno</option>
                    <option value="Turno">Manhã</option>
                    <option value="Turno">Tarde</option>
                    <option value="Turno">Noite</option>
                </select>
            </div>
            <div class="cadT2">
                <label for="data">Data de Início</label>
                <input type="date" name="Data de Inicio" id="data" value="Data De Início">
                <label for="prof">Professor Responsável</label>
                <input type="text" name="p" id="prof" placeholder="Professor Responsável">
                <label for="Sala">Sala</label>
                <input type="number" id="Sala" name="Sala" placeholder="Sala">
            </div>
            <div class="send">
                <input type="submit" value="Cadastrar Turma">
                <input type="reset" value="Cancelar">
            </div>
        </div>
    </form>
</body>

</html>