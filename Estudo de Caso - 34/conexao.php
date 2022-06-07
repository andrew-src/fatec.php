<?php
define('HOST', 'localhost');
define('USUARIO', 'id18935201_php_user');
define('SENHA', 'uma_S3NH4_qualquer');
define('DB', 'id18935201_php_db');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) 
or
die ('Ops! Não foi posível conectar-se D: ');

echo "A conexão foi efetuada com sucesso! :D ";
?>