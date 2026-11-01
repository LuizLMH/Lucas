<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cursos</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages11">
        <a href="inicio.php" class="p2">Dashboard</a>
        <a href="cadastrarAl.php" class="p3">Cadastrar Alunos</a>
        <a href="visualizarAl.php" class="p4">Visualizar Alunos</a>
        <a href="cadastrarT.php" class="p6">Cadastrar Turmas</a>
        <a href="visualizarT.php" class="p7">Visualizar Turmas</a>
        <a href="cadastrarP.php" class="p9">Cadastrar Professores</a>
        <a href="visualizarP.php" class="p10">Visualizar Professores</a>
        <a href="cadastrarC.php" class="p11">Cadastrar Cursos</a>
        <a href="visualizarC.php" class="p12">Visualizar Cursos</a>
        <a href="index.php" id="sair">sair</a>
    </div>
    <h1>Cadastrar Cursos</h1>
    <p>Dados do Curso</p>
    <form action="inserirC.php" method="post">
        <div class="cadpai">
            <div class="cadT">
                <label for="nomeC">Nome do Curso</label>
                <input type="text" name="nomeC" placeholder="Nome do Curso" id="nomeC">
                <label for="cargaH">Carga Horária</label>
                <input type="text" name="cargaH" id="cargaH" placeholder="Carga Horária">
            </div>
            <div class="send">
                <input type="submit" value="Cadastrar Curso">
                <input type="reset" value="Cancelar">
            </div>
        </div>
    </form>
</body>

</html>