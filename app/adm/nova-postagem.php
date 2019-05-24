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
    <title>Criar Postagem</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
        <div class="container">

            <?php include '../templates/barra_logado.php' ?>
            <br>
            <h2>Inserir Postagens</h2>
            <br>
            <form class="form-signin" action="../view/realizar-postagem.php" method="post">
                <div class="form-group">
                    <input name="titulo" class="form-control form-control-lg" type="text" placeholder="Titulo da Postagem">
                    <br>
                    <input name="caminhoFoto" type="file" class="form-control-file" id="exampleFormControlFile1">
                    <br>
                    <textarea name="texto" class="form-control" placeholder="Corpo da Postagem" id="exampleFormControlTextarea1" rows="20"></textarea>
                    <br>
                    <input type="hidden" name="id_usuario" id="idUsuario" value="<?=$usuario->getId()?>">
                    <button type="submit" class="btn btn-primary">Postar</button>
                </div>
            </form>

        </div>
    </body>
</html>