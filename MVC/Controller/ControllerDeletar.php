<?php
require_once("../Model/banco.php");
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->deleteLivro($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../View/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
