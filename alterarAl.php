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
    $sql = "SELECT * FROM alunos WHERE idAlunos=$id";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) == 1) {
        $aluno = mysqli_fetch_array($resultado);
    } else {
        echo "<h1>Aluno não encontrado</h1>";
        exit;
    }
} else {
    echo "<h1>ID inválido<?h1>";
    // exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Aluno</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages3">
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
    <h1>Alterar Aluno</h1>
    <div class="topo">
        <p>Preencha os dados para realizar as alterações no cadastro do aluno</p>
        <p>Dados do Aluno</p>
    </div>
    <div class="tudo">
        <div class="formG">
            <form action="atualizarAl.php" method="post">
                <div class="cadpai">
                    <div class="cadT2">
                        <input type="hidden" name="id" value="<?php echo $aluno["idAlunos"] ?>">
                        <label for="Nome">Nome completo</label>
                        <input type="text" name="nome" id="Nome" value="<?php echo $aluno["nomeCompleto"]; ?>"
                            required>
                        <label for="Nome pai">Nome do pai</label>
                        <input type="text" name="pai" id="pai" value="<?php echo $aluno["nomePai"]; ?>" required>
                        <label for="Nome Mãe">Nome da mãe</label>
                        <input type="text" name="mae" id="mae" value="<?php echo $aluno["nomeMae"]; ?>" required>
                        <label for="turma">Turma</label>
                        <select name="turma" id="turma">
                            <option value="#">Selecione a Turma</option>
                            <?php
                            include 'conecta.php';
                            $sql = "SELECT nomeTurma FROM turmas";
                            // $nomeC=$_POST["nomeC"]
                            $resultado = mysqli_query($conexao, $sql);
                            if (mysqli_num_rows($resultado) > 0) {
                                while ($linha = mysqli_fetch_array($resultado)) {
                                    ?>
                                    <option value="<?php echo $linha['nomeTurma']; ?>"> <?php echo $linha['nomeTurma']; ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="cadT">
                        <label for="cpf">CPF</label>
                        <input type="number" name="cpf" id="cpf" value="<?php echo $aluno["cpf"]; ?>" required>
                        <label for="Data">Data de nascimento</label>
                        <input type="date" name="dataN" id="dataN" value="<?php echo $aluno["dataNascimento"]; ?>"
                            required>
                        <label for="Tefefone">Telefone</label>
                        <input type="number" name="telefone" id="tefefone" value="<?php echo $aluno["telefone"]; ?>"
                            required>
                        <label for="curso">Selecione o Curso</label>
                        <select name="curso" id="curso">
                            <option value="#">Selecione o Curso</option>
                            <?php
                            include 'conecta.php';
                            $sql = "SELECT idCursos, nomeC FROM cursos";
                            // $nomeC=$_POST["nomeC"]
                            $resultado = mysqli_query($conexao, $sql);
                            if (mysqli_num_rows($resultado) > 0) {
                                while ($linha = mysqli_fetch_array($resultado)) {
                                    ?>
                                    <option value="<?php echo $linha['nomeC']; ?>"<?php if($aluno["idCurso"]==$linha['idCursos']) echo " selected";  ?>> <?php echo $linha['nomeC']; ?> </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Atualizar Cadastro">
                <input type="reset" value="Cancelar">
            </form>
        </div>
    </div>
</body>

</html>