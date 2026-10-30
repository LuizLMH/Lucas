<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $user = $_POST["user"];
    $senha = $_POST["senha"];
    if($senha== 123){
        echo "Erro de Usuário";
    }
    ?>
</body>
</html>