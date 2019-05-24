<?php 

    require_once '../model/Usuario.php';
    require_once '../helper/MySQLiHelper.php';

    class UsuarioDAO{

        public function validaUsuario(string $email, string $senha){
            $helper = new MySQLiHelper();
            $conexao = $helper->conectaMySql();

            $email_formatado = mysqli_real_escape_string($conexao, $email);
            $senha_md5 = md5($senha);
            
            $query = "select * from usuario where email='{$email_formatado}' and senha='{$senha_md5}'";
            
            $resultado = mysqli_query($conexao, $query);
            $array = mysqli_fetch_assoc($resultado);
            
            $usuario = new Usuario(
                        $array["nome"],
                        $array["email"],
                        $array["hierarquia"],
                        $array["senha"]);
                        $usuario->setId(intval($array["id"]));
            
            $helper->fechaConexao();
            
            return $usuario;
        }
    }