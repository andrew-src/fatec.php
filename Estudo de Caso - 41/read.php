<?php
    function ler(){
        $arquivo = "isset_get.txt";

        $fp = fopen($arquivo, 'r');

        $conteudo = fread($fp, filesize($arquivo));

        fclose($fp);

        return $conteudo;
    }
    echo "<h1><strong> Registros: </strong></h1>";
    echo nl2br(ler());
?>