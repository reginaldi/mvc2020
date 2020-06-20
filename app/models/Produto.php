<?php
//Classe é um modelo, um exemplo, um modelo onde você define valores, comportamentos e ações que essa classe compartilha todas as vezes que é usada
class Produto extends Conexao
{
  
  public function MsgErro()
  {
    echo "Deu Erro"
  }

  public function __construct()
  {
    $teste =$this->connect();
    var_dump($teste);
  }


}