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
    $sql = "SELECT * FROM professor WHERE idProfessor=$id";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) == 1) {
        $professor = mysqli_fetch_array($resultado);
    } else {
        echo "<h1>Professor não encontrado</h1>";
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
    <title>Alterar Professores </title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages9">
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
    <h1>Alterar Professor</h1>
    <p>Dados do Professor</p>
    <form action="atualizarP.php" method="post">
        <div class="cadpai">
            <div class="cadT">
                <label for="NomeP">Nome</label>
                <input type="hidden" name="id" value="<?php echo $professor["idProfessor"] ?>">
                <input type="text" name="nomeP" value="<?php echo $professor["nomeP"] ?>" id="nomeP" required>
                <label for="dataNP">Data de nascimento</label>
                <input type="date" name="dataNP" value="<?php echo $professor["dataNP"] ?>" id="dataNP" placeholder="Data de Nascimento" required>
                <label for="telefoneP">Telefone</label>
                <input type="text" name="telefoneP" value="<?php echo $professor["telefoneP"] ?>" id="telefoneP" placeholder="Nome do Telefone" required>
            </div>
            <div class="cadT2">
                <label for="cpfP">CPF</label>
                <input type="text" name="cpfP" value="<?php echo $professor["cpfP"] ?>" id="cpfP" placeholder="CPF" required>
                <label for="salario">Salário</label>
                <input type="text" name="salario" value="<?php echo $professor["salario"] ?>" id="salario" placeholder="Salário" required>
            </div>
            <div class="send">
                <input type="submit" value="Atualizar Professor">
                <input type="reset" value="Cancelar">
            </div>
        </div>
    </form>
</body>

</html>