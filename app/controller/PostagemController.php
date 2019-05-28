<?php

require_once '../dao/PostagemDAO.php';

class PostagemController{

    public function salvarPostagem(){
        $titulo = $_POST['titulo'];
        $caminhoFoto = "teste";
        $texto = $_POST['texto'];
        $idUsuario = $_POST['id_usuario'];

        $dao = new PostagemDAO();
        $postagem = new Postagem($titulo, $caminhoFoto, $texto, $idUsuario);
        
        $dao->salvar($postagem);
        $key = md5("postado_com_sucesso!");
        header("Location:../adm/index.php?key=$key");
    }
    
    public function listar(){
        
        $dao = new PostagemDAO();
        $lista = $dao->listar();
        return $lista;
    }
}