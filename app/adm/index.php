<!DOCTYPE html>
<html>
<head>
    <?php require_once '../controller/UsuarioController.php';
    
    session_start();
    if(!isset ($_SESSION['user']) == true){
        unset($_SESSION['user']);
        header('Location:../view/login.php');
    }
    $controller = new UsuarioController();
    $usuario = $controller->deserializaUsuario($_SESSION['user']);
    ?>

    <meta charset="UTF-8">
    <title>Logado como <?=$usuario->getNome()?></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <div class="container">
        <?php
            if(isset($_GET['key'])){
                $key = $_GET['key'];
                if($key == md5("postado_com_sucesso!")){ ?>

                <div id="meuModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Postagem Realizada com Sucesso!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                    </div>
                </div>
                <script>$(document).ready(function(){
                        $('#meuModal').modal('show');
                    })
                </script>

                <?php }else if($key == md5("cadastrado-com-sucesso-no-sistema")){
                echo "<div class='alert alert-success' role='alert'>
                            <strong>Cadastrado com sucesso!</strong>
                        </div>";
                }
            }
        ?>
        <?php include '../templates/barra_logado.php' ?>
        <div class="alert alert-info" role="alert">
            Site em Desenvolvimento! 
        </div>
    </div>
</body>
</html>