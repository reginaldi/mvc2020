<?php 
  require_once('../config.php');
  
  class Conexao
  {
    //@return $conn Atributo que será returnado quando a função connect() for chamada
    

    private $conn;
    protected function connect()
    {

      try{
          $this->conn = new PDO('mysql:host='.DATABASE['host'].';dbname='.DATABASE['dbname'].'; charset=utf8', DATABASE['user'], DATABASE['password'], DATABASE['options']);
        return $this->conn;

      }catch(Excepetion $erro){

        die("erro ao tentar conectar ! :". $erro->getMessage());

      }

    }
    //@param $sql query a ser executado
    //@param $params

    public function SelectAll($sql, $params)
    {
      $result = $this->connect()->prepare($sql);
      $result = execute($params);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }
  }


  //instancia da classe
  $testeCon = new Conexao();
  $testeCon->SelectAll('SELECT * FROM categoria;', '');

  echo"<pre>";
    print_r($resultado);
  echo"<pre>"
