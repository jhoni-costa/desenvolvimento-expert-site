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
        
        public function listar(){
            $helper = new MySQLiHelper();
            $conexao = $helper->conectaMySql();
            
            $query = "select * from postagem order by id asc";
            $resultado = mysqli_query($conexao, $query);
            $array = mysqli_fetch_all($resultado);
            $listaDePostagens = [];
            
            for($i=0; $i < count($array); $i++){
                $id = $array[$i][0];
                $titulo = $array[$i][1];
                $caminho = $array[$i][2];
                $texto = $array[$i][3];
                $idUsuario = $array[$i][4];
                $regDate = $array[$i][5];
                
                $postagem = new Postagem($titulo, $caminho, $texto, $idUsuario);
                $postagem->setId($id);
                $postagem->setRegDate($regDate);
                
                array_push($listaDePostagens, $postagem);
            }
            
            $conexao->close();
            
            return $listaDePostagens;
        }
    }