<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>


    <div class="pagina2">
        <div class="titulob">
            <h1 id="tb">Sistema</h1>
            <h1 id="to">Acadêmico</h1>
            <h1 id="jls">𝑱𝑳𝑺</h1>
        </div>
        <div class="pages">
            <a href="sair.php" id="sair">sair</a>
        </div>
        <div class="subtitle">
            <h1>Bem-vindo ao Sistema acadêmico</h1>
            <p>Aqui, você aluno pode companhar os principais indicadores da instituição</p>
        </div>
        <div class="informacoes">
            <div class="info1">
                <?php
                include 'conecta.php';
                $resultado = mysqli_query($conexao, "SELECT * FROM aluno");

                $totalPessoas = mysqli_num_rows($resultado);
                ?>
                <h1> <?php echo $totalPessoas; ?> </h1>
                <p>Alunos Cadastrados</p>
            </div>
            <div class="info1">
                <h1> <?php echo $totalPessoas; ?> </h1>
                <p>Alunos Ativos</p>
            </div>
            <div class="info1">
                <?php $resultado = mysqli_query($conexao, "SELECT * FROM turma");

                $totalTurmas = mysqli_num_rows($resultado); ?>
                <h1><?php echo $totalTurmas; ?></h1>
                <p>Turmas Cadastrados</p>
            </div>
            <div class="info1">
                <?php $resultado = mysqli_query($conexao, "SELECT * FROM turma");

                $totalTurmas = mysqli_num_rows($resultado); ?>
                <h1> <?php echo $totalTurmas; ?> </h1>
                <p>Aulas da Semana</p>
            </div>
            <div class="info1">
                <?php $resultado = mysqli_query($conexao, "SELECT * FROM professor");

                $totalProfessores = mysqli_num_rows($resultado); ?>
                <h1><?php echo $totalProfessores; ?></h1>
                <p>Professores Cadastrados</p>
            </div>
            <div class="info1">
                <?php $resultado = mysqli_query($conexao, "SELECT * FROM curso");

                $totalCursos = mysqli_num_rows($resultado); ?>
                <h1><?php echo $totalCursos ?></h1>
                <p>Cursos Cadastrados</p>
            </div>
        </div>
        <div class="dividir">
            <div class="noticias">
                <h1 id="titulo">Próximas Aulas</h1>
                <?php
                    $sql = "SELECT * FROM turma;";
                    $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while ($nomeT = mysqli_fetch_array($resultado)) {
                ?>
                        <div class="noticia2">
                            <h1><?php echo $nomeT['nomeT']; ?></h1>
                            <p id="dia"><?php echo $nomeT['inicio']; ?></p>
                            <p id="teste"><?php echo "Sala " . $nomeT['sala']; ?></p>
                        </div>
            </div>
            <br><br><br>
        </div>
    </div>
<?php
                    }
                } else {
                    echo "<h1 id='registro'>Sem registros de aulas ou turmas encontrados</h1>";
                }

?>
<div class="ani">
<?php
echo "<h1 id='breve'>Disponível nas próximas atualizações</h1>";
?>
    <h1 id="aniT">Próximos Aniversários</h1>
    <div class="ani1">
        <h1>Nome do Aluno</h1>
        <p>Data de Aniversário</p>
    </div>

</body>

</html>