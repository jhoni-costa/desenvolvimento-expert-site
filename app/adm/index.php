<!DOCTYPE html>
<html>
<head>
    <?php require_once '../controller/UsuarioController.php';
          require_once '../controller/PostagemController.php';
    
    session_start();
    if(!isset ($_SESSION['user']) == true){
        unset($_SESSION['user']);
        header('Location:../view/login.php');
    }
    $controller = new UsuarioController();
    $postController = new PostagemController();
    
    $usuario = $controller->deserializaUsuario($_SESSION['user']);
    
    $listaPostagens = $postController->listar();
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
        <?php include '../templates/modal-confirma-postagem.php' ?>
        <?php include '../templates/barra_logado.php' ?>
        <div class="alert alert-info" role="alert">
            Site em Desenvolvimento! 
        </div>
        
        <h4>Postagens</h4>
        <br>
        <div class="list-group">
        <?php 
            foreach($listaPostagens as &$postagem){ ?>
            
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><?=$postagem->getTitulo()?></h5>
                  <small><?=$postagem->getRegDate()?></small>
                </div>
                <p class="mb-1"><?=$postagem->getTexto()?></p>
                <small>Ainda não sei o que por hahaha.</small>
              </a>
                
        <?php } ?>
        </div>
    </div>
</body>
</html>