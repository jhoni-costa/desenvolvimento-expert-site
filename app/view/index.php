<!DOCTYPE html>
<html>
<head>
    <?php require_once '../controller/UsuarioController.php';
    
    session_start();
    if(!isset ($_SESSION['user']) == true){
        unset($_SESSION['user']);
        header('Location:login.php');
    }
    $controller = new UsuarioController();
    $usuario = $controller->deserializaUsuario($_SESSION['user']);
    ?>

<meta charset="UTF-8">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
        <div class="container">

            <?php include '../templates/barra_logado.php' ?>
            
            <div class="alert alert-info" role="alert">
                Site em Desenvolvimento! 
            </div>


        </div>
    </body>
</html>