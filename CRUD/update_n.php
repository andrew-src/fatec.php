<?php

include_once "conexao.php";

$codigo = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

$sqlUpdate = "UPDATE users SET user_name = '$nome', user_email = '$email', user_date = '$data', user_mensagem = '$mensagem' WHERE user_id = 'codigo'";

if (!mysqli_query($conexao, $sqlUpdate)){
  die('Erro ao atualizar o registro'.mysqli_error($conexao)); 
}else{
  echo "Registro atualizado com sucesso. </br>";
}
mysqli_close($conexao);
//header("location:select.php");
?>