<?php
#esta incluindo o acesso ao banco, o qual não precisa nesse documento
// include 'db.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $nome = $_POST['nome'];
//     $data = $_POST['data'];
//     $hora_inicio = $_POST['hora_inicio'];
//     $hora_fim = $_POST['hora_fim'];
//     $descricao = $_POST['descricao'];
//     $local = $_POST['local'];
//     $senha = $_POST['senha'];

//     $stmt = $pdo->prepare("INSERT INTO eventos (nome, data, hora_inicio, hora_fim, descricao, local, senha) VALUES (?, ?, ?, ?, ?, ?, ?)");
//     $stmt->execute([$nome, $data, $hora_inicio, $hora_fim, $descricao, $local, $senha]);

//     echo "Evento cadastrado!";
// }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Evento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>tela de login</h1>
<form method="POST">
    <label for="email">email cadastrado:</label>
    <input type="text" id="email" name="email" required><br>

    <label for="senha">senha cadastrada:</label>
    <input type="text" id="senha" name="senha"><br>

    <button type="submit">entrar</button>
    <button onclick="window.location.href='index.php'">Voltar</button>

</form>

</body>
</html>