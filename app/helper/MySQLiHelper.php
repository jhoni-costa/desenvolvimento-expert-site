<?php

class MySQLiHelper{

    private $servidor;
    private $usuario;
    private $senha;
    private $banco;

    private $conexao;

    public function conectaMySql(){

        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "devexpert";

        $this->conexao = new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco);

        if ($this->conexao->connect_error) {
            die("Conexão falhou!!!" . $this->conexao->connect_error);
        }

        return $this->conexao;
    }

    public function fechaConexao(){
        $this->conexao->close();
    }
    public function ultimoIdIserido(){
        return mysql_insert_id();
    }
}
