<?php

    require_once '../model/Postagem.php';
    require_once '../helper/MySQLiHelper.php';

    class PostagemDAO{

        public function salvar(Postagem $postagem){
            $helper = new MySQLiHelper();
            $conexao = $helper->conectaMySql();

            $statement = $conexao->prepare("INSERT INTO postagem (titulo, caminho_foto, texto, id_usuario) VALUES (?,?,?,?)");
            $statement->bind_param("sssi", $titulo, $caminhoFoto, $texto, $idUsuario);
            
            $titulo = $postagem->getTitulo();
            $caminhoFoto = $postagem->getCaminhoFoto();
            $texto = $postagem->getTexto();
            $idUsuario = intval($postagem->getIdUsuario());

            $statement->execute();

            $helper->fechaConexao();
        }
    }