<?php

class Postagem{

    private $id;
    private $titulo;
    private $caminhoFoto;
    private $texto;
    private $idUsuario;
    private $regDate;

    function __construct(string $titulo, string $caminhoFoto, string $texto, $idUsuario){
        $this->titulo = $titulo;
        $this->caminhoFoto = $caminhoFoto;
        $this->texto = $texto;
        $this->idUsuario = $idUsuario;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo(string $titulo){
        $this->titulo = $titulo;
    }

    public function getCaminhoFoto(){
        return $this->caminhoFoto;
    }

    public function setCaminhoFoto(string $caminhoFoto){
        $this->caminhoFoto = $caminhoFoto;
    }

    public function setTexto(string $texto){
        $this->texto = $texto;
    }

    public function getTexto(){
        return $this->texto;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function setRegDate($regDate){
        $this->regDate = $regDate;
    }
    
    public function getRegDate(){
        return $this->regDate;
    }
}