<?php
define('HOST', 'localhost');
define('USUARIO', 'id19135066_database');
define('SENHA', '&<EV6*gH~U)Np\kC');
define('DB', 'id19135066_users');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) 
or
die ('Ops! Não foi posível conectar-se D: ');

echo "A conexão foi efetuada com sucesso! :D ";
?>