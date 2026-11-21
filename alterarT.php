<?php
session_start();
if (!isset($_SESSION["nome"])) {
    header("Location:index.php");
    exit;
}
?>
<?php
include 'conecta.php';
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM turma WHERE idTurma=$id";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) == 1) {
        $turma = mysqli_fetch_array($resultado);
    } else {
        echo "<h1>Turma não encontrada</h1>";
        exit;
    }
} else {
    echo "<h1>ID inválido</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Turmas</title>
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
        <a href="sair.php" id="sair">sair</a>
    </div>
    <h1>Alterar Turma</h1>
    <p>Dados da Turma</p>
    <form action="atualizarT.php" method="post">
        <div class="cadpai">
            <div class="cadT">
                <input type="hidden" name="id" value="<?php echo $turma["idTurma"] ?>">
                <label for="turma">Turma</label>
                <input type="text" name="nomeT" value="<?php echo $turma["nomeT"]; ?>" id="turmas" required>
                <label for="Ano">Ano/Semestre</label>
                <input type="text" name="ano" id="Ano" value="<?php echo $turma["ano"]; ?>" required>
                <label for="Turno">Selecione o Turno</label>
                <select name="turno" id="Turno" required>
                    <option value="">Selecione o Turno</option>
                    <option value="Manhã"
                        <?php if ($turma['turno'] == 'Manhã') echo 'selected'; ?>>Manhã</option>
                    <option value="Tarde"
                        <?php if ($turma['turno'] == 'Tarde') echo 'selected'; ?>>Tarde</option>
                    <option value="Noite"
                        <?php if ($turma['turno'] == 'Noite') echo 'selected'; ?>>Noite</option>
                    <option value="Integral"
                        <?php if ($turma['turno'] == 'Integral') echo 'selected'; ?>>Integral</option>
</select>
                </select>
                <label for="curso">Selecione o Curso</label>
                <select name="curso" id="curso">
                    <option value="">Selecione o Curso</option>
                    <?php
                    include 'conecta.php';
                    $sql = "SELECT idcurso, nomeC FROM curso";
                    $resultado = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($linha = mysqli_fetch_array($resultado)) {
                            ?>
                            <option value="<?php echo $linha['idcurso']; ?>"
                                <?php if ($linha['idcurso'] == $turma['idcurso'])
                                    echo 'selected'; ?>>
                                <?php echo $linha['nomeC']; ?>
                            </option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="cadT2">
                <label for="dataI">Data de Início</label>
                <input type="date" name="dataI" id="dataI" value="<?php echo $turma["inicio"]; ?>" required>
                <label for="dataT">Data de Término</label>
                <input type="date" name="dataT" id="dataT" value="<?php echo $turma["termino"]; ?>" required>
                <label for="professor">Professor Responsável</label>
                <select name="professor" id="professor">
                    <option value="#">Selecione o professor</option>
                    <?php
                    include 'conecta.php';
                    $sql = "SELECT idprofessor, nomeP FROM professor";
                    // $nomeC=$_POST["nomeC"]
                    $resultado = mysqli_query($conexao, $sql);
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($linha = mysqli_fetch_array($resultado)) {
                            ?>
                            <option value="<?php echo $linha['idprofessor']; ?>"
                                <?php if ($linha['idprofessor'] == $turma['idprofessor'])
                                    echo 'selected'; ?>>
                                <?php echo $linha['nomeP']; ?>
                            </option>
                            <?php
                        }
                    }
                    ?>
                </select>
                <label for="sala">Sala</label>
                <input type="number" id="sala" name="sala" value="<?php echo $turma["sala"]; ?>" required>
            </div>
            <div class="send">
                <input type="submit" value="Alterar Turma">
                <input type="reset" value="Cancelar">
            </div>
        </div>
    </form>
</body>

</html>