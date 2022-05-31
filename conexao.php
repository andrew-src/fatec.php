<?php
define('HOST', 'localhost');
define('USUARIO', 'id18909336_phpuser');
define('SENHA', 'uma_S3NH4_qualquer');
define('DB', 'id18909336_phpdb');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) 
or
die ('Ops! Não foi posível conectar-se D: ');

echo "A conexão foi efetuada com sucesso! :D ";
?>