<?php
#http

header("Contente-type: text/html; charset=utf-8");

$username = $_GET['nome'];
$endereco = $_GET['endereco'];
$data_nasc = $_GET['data_nasc'];
$num_titulo = $_GET['num_titulo'];
$nome_candidato = $_GET['nome_candidato'];
$num_candidato = $_GET['num_candidato'];
$partido_candidato = $_GET['partido_candidato'];

echo "<b>Nome:</b> $username .</br> 
    <b>Endereço:</b> $endereco .</br>
    <b>Data de Nascimento:</b> $data_nasc  .</br>
    <b>Número do Título:</b> $num_titulo .</br>
    <b>Candidato:</b>$nome_candidato .</br>
    <b>Número:</b> $num_candidato .</br>
    <b>Partido:</b> $partido_candidato";
