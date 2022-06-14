<?php

require_once("init.php");

    class Banco
    {
        protected $mysqli;
    
    public function __construct()
    {
        echo "Conexão efetuada com sucesso.";
        $this->conexao();
    }
    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }
    
    public function setLivro ($nome,$autor,$quantidade,$preco,$data)
    { 
        $stmt = $this->mysqli->prepare("INSERTINTOlivros(`nome`,`autor`,`quantidade`,`preco`,`data`)VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$autor,$quantidade,$preco,$data);
        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }
}