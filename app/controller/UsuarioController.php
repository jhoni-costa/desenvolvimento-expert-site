<?php 
    require_once '../model/Usuario.php';
    require_once '../dao/UsuarioDAO.php';

    class UsuarioController{
        
        public function verificaLogin(){
          $email = $_POST['email'];
          $senha = $_POST['senha'];
            var_dump($_POST);
          $dao = new UsuarioDAO();

          $usuario = $dao->validaUsuario($email, $senha);
            
          if(($usuario->getNome() == null) and ($usuario->getSenha() == null)){
              $key = md5("dados-errados-ao-logar-no-sistema");
              header("Location:../view/login.php?key=$key");
          }else{
              $_SESSION['user'] = $this->serializaUsuario($usuario);
             header("Location:../view/");
          }
        }
        
        public function serializaUsuario(Usuario $usuario){
            return serialize($usuario);
        }
        public function deserializaUsuario($usuario){
            return unserialize($usuario);
        }
        public function getUsuario() :Usuario{
            return $usuario;
        }
    }