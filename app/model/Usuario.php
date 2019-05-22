<?php

class Usuario{
    
    private $id;
    private $nome;
    private $email;
    private $hierarquia;
    private $senha;
    
    public function __construct($nome, $email, $hierarquia, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->hierarquia = $hierarquia;
        $this->senha = $senha;
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
      $this->id = $id;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setHierarquia($hierarquia){
        $this->hierarquia = $hierarquia;
    }

    public function getHierarquia(){
        return $this->hierarquia;
    }
}