<?php
# passo 1
require_once("init.php");

# definindo a classe para conexão com banco de dados
class Banco 
{
    # Escopo atributo Public ele pode ser acessado e alterado do lado de fora por qualquer
    # Escopo atributo Private só pode ser acessado dentro da classe
    # Escopo atributo Protected pode ser invocado por suas subclasses e em qualquer lugar da classe
  protected $mysqli;

    # Métodos são funções que existem somente dentro de cada objeto
    # public function __construct() inicializa quando a classe é acionada, o __construct() pode ou não receber valores de entrada Ex: __construct($valor1, $valor2)
  public function __contruct() 
  {
    # $this é o valor do objeto chamado
    echo "Conexão efetuada com sucesso! :D ";
    $this->conexao()
  }
  # Método criado para iniciar a conexão com o banco de dados
  private function conexao() 
  {
    $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
  }
}