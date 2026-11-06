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
        <a href="cadastrarP.php" class="p9">Cadastrar Professores</a>
        <a href="visualizarP.php" class="p10">Visualizar Professores</a>
        <a href="cadastrarC.php" class="p11">Cadastrar Cursos</a>
        <a href="visualizarC.php" class="p12">Visualizar Cursos</a>
        <a href="index.php" id="sair">sair</a>
    </div>
    <h1>Cadastrar Turma</h1>
    <p>Dados da Turma</p>
    <form action="inserirT.php" method="post">
        <div class="cadpai">
            <div class="cadT">
                <label for="turma">Turma</label>
                <input type="text" name="nomeT" placeholder="Nome da Turma" id="turmas" required>
                <label for="Ano">Ano/Semestre</label>
                <input type="text" name="ano" id="Ano" placeholder="Ano/Semestre" required>
                <label for="Turno">Selecione o Turno</label>
                <select name="Turno" id="Turno" required>
                    <option>Selecione o Turno</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                    <option value="Integral">Integral</option>
                </select>
                <label for="curso">Selecione o Curso</label>
                <select name="curso" id="curso">
                    <option value="#">Selecione o Curso</option>
                    <?php
                    include 'conecta.php';
                    $sql = "SELECT nomeC FROM cursos";
                    // $nomeC=$_POST["nomeC"]
                    $resultado = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($linha = mysqli_fetch_array($resultado)) {
                    ?>
                            <option value="Nome"> <?php echo $linha['nomeC']; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="cadT2">
                <label for="dataI">Data de Início</label>
                <input type="date" name="dataI" id="dataI" value="Data De Início" required>
                <label for="dataT">Data de Término</label>
                <input type="date" name="dataT" id="dataT" value="Data De Término" required>
                <label for="professor">Professor Responsável</label>
                <select name="professor" id="professor">
                    <option value="#">Selecione o professor</option>
                    <?php
                    include 'conecta.php';
                    $sql = "SELECT nomeP FROM professores";
                    // $nomeC=$_POST["nomeC"]
                    $resultado = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($linha = mysqli_fetch_array($resultado)) {
                    ?>
                            <option value="Nome"> <?php echo $linha['nomeP']; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <label for="Sala">Sala</label>
                <input type="number" id="Sala" name="Sala" placeholder="Sala" required>
            </div>
            <div class="send">
                <input type="submit" value="Cadastrar Turma">
                <input type="reset" value="Cancelar">
            </div>
        </div>
    </form>
</body>

</html>