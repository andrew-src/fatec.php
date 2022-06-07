<?php

    if (isset($_GET['nome']) and
        isset($_GET['endereco']) and
        isset($_GET['data_nasc']) and
        isset($_GET['num_titulo']) and
        isset($_GET['nome_candidato']) and
        isset($_GET['num_candidato']) and
        isset($_GET['partido_candidato'])){

            $name = $_GET['nome'];
            $endereco = $_GET['endereco'];
            $data_nasc = $_GET['data_nasc'];
            $num_titulo = $_GET['num_titulo'];
            $nome_candidato = $_GET['nome_candidato'];
            $num_candidato = $_GET['num_candidato'];
            $partido_candidato = $_GET['partido_candidato'];

            $conteudo = "\n Nome: $name\n Endereço: $endereco\n Data de Nascimento: $data_nasc\n Título: $num_titulo\n Candidato: $nome_candidato\n Número do Candidato: $num_candidato\n Partido: $partido_candidato\n"; 

            /*
            $conteudo = "<b>Nome:</b> $name\n <b>Endereço:</b> $endereco\n <b>Data de Nascimento:</b> $data_nasc\n <b>Título:</b> $num_titulo <hr size='3'>\n <b>Candidato:</b> $nome_candidato\n <b>Número do Candidato:</b> $num_candidato\n <b>Partido</b> $partido_candidato"; */

            $arquivo = fopen('isset_get.txt', 'a+');
            fwrite($arquivo, $conteudo);
            fclose($arquivo);
        }

        echo "<b>Nome:</b> $name</br> 
              <b>Endereço:</b> $endereco</br> 
              <b>Data de Nascimento:</b> $data_nasc</br> 
              <b>Número do Título:</b> $num_titulo</br> 
              <b>Candidato:</b> $nome_candidato</br> 
              <b>Número:</b> $num_candidato</br> 
              <b>Partido:</b> $partido_candidato";
