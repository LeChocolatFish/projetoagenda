<?php

$login = $_POST['login'];
$senhaAluno = $_POST['senha'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "agenda_eventos";
$conexao = mysqli_connect($host, $user, $pass, $base);
$sql = "select * from tb_usuarios where email = '$login' and senha = '$senhaAluno' ";

if (mysqli_num_rows($resultado) > 0 )
{
    echo "acesso liberado";
}
else
{
    echo "acesso negado";
}

?>