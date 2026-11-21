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
    $sql = "SELECT * FROM curso WHERE idCurso=$id";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) == 1) {
        $curso = mysqli_fetch_array($resultado);
    } else {
        echo "<h1>Curso não encontrado</h1>";
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
    <title>Alterar Curso</title>
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
        <a href="sair.php" id="sair">sair</a>
    </div>
    <h1>Alterar Curso</h1>
    <p>Dados do Curso</p>
    <form action="atualizarC.php" method="post">
        <div class="cadpai">
            <div class="cadT">
                 <input type="hidden" name="idcurso" value="<?php echo $curso["idCurso"] ?>">
                <label for="nomeC">Nome do Curso</label>
                <input type="text" name="nomeC" value="<?php echo $curso["nomeC"];  ?>" id="nomeC" required>
                <label for="cargaH">Carga Horária</label>
                <input type="text" name="cargaH" id="cargaH" value="<?php echo $curso["cargaH"];  ?>" required>
            </div>
            <div class="send">
                <input type="submit" value="Alterar Curso">
                <input type="reset" value="Cancelar">
            </div>
        </div>
    </form>
</body>

</html>