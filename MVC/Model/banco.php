<?php
#passo 1
require_once("init.php");

# definindo a classa para conexão com banco de dados
class Banco
{
    #Escopo atributo Public ele pode ser acessado e alterado do lado de fora por qualquer
    #Escopo atributo Private só pode ser acessado de dentro da clase.
    #Escopo atributo Protected pode ser invocado por suas subclasses e em qualquer lugar da classe, sem problemas.
    protected $mysqli;

    # Métodos são que funções existentes somente dentro de cada objeto.
    # public function __construct() inicializa quanto a classe é acionada, o __construct() pode ou não receber valores de entrada EX: __construct($valor1, $valor2)
    public function __construct()
    {
        # $this é o valor do objeto chamado.
        echo "Conexão efetuada com sucesso";
        $this->conexao();
    }
    # Métodos criado para iniciar a conexão com o banco de dados
    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }

    # passo 2 criar o método para inserir os dados no banco
    public function setLivro($nome, $autor, $quantidade, $preco, $data)
    {
        # prepare Prepare é útil para evitar problemas com argumentos (SQL injection) 
        $stmt = $this->mysqli->prepare("INSERT INTO livros (`nome`, `autor`, `quantidade`, `preco`, `data`) VALUES (?,?,?,?,?)");
        # bindParam() é utilizado para definição do valor atravez de um parâmetro, ou seja, um valor atribuido a uma variável
        # VALUES (?,?,?,?,?) refere-se ao número de variaveis atribuidas ao método setLivro que recebe os valores do front-end
        # "sssss" refere-se ao número de campos existentes dentro da tabela
        $stmt->bind_param("sssss", $nome, $autor, $quantidade, $preco, $data);
        #retorna o número de linhas que foram modificadas ou excluídas pela instrução SQL
        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    # passo 3 criar o método para visualizar os dados no banco
    public function getLivro()
    {
        $result = $this->mysqli->query("SELECT * FROM livros");

        if ($result != null) {

            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $array[] = $row;
            }

            return $result;
        }
    }

    # passo 4 criar o método para excluir os dados no banco

    public function deleteLivro($id)
    {
        if ($this->mysqli->query("DELETE FROM `livros` WHERE `nome` = '" . $id . "';") == TRUE) {
            return true;
        } else {
            return false;
        }
    }
    # Passo 5 criar o método para pesquisar os dados no banco para ser utilizados em atualizar os dados
    public function pesquisaLivro($id)
    {
        $result = $this->mysqli->query("SELECT * FROM livros WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }


    # Passo 6 criar o método para atualizar os dados no banco
    public function updateLivro($nome, $autor, $quantidade, $preco, $flag, $data, $id)
    {
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?,`data` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssss", $nome, $autor, $quantidade, $preco, $flag, $data, $id);
        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
