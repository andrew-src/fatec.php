<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

$sqlInsert = "INSERT INTO users (user_name,user_email,user_date,user_mensagem) values ('$nome', '$email', '$data', '$mensagem')";

$rs = mysqli_query($conexao,$sqlInsert)
or
die("FALHA ao cadastrar os dados...");

echo "Dados cadastrados com SUCESSO!";
?>