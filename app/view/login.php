<!DOCTYPE HTML>
<html lang="pt">
    <head>
    
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/signin.css">
        <script src="../../js/jquery.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php session_start();?>
    </head>

    <body class="text-center">
         <?php
            if(isset($_GET['key'])){
              $key = $_GET['key'];
              if($key == md5("dados-errados-ao-logar-no-sistema")){ ?>
                  <div id="meuModal" class="modal" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Erro ao Logar no Sistema</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Verifique seus dados e tente novamente!</p>
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
    <form class="form-signin" action="verifica-login.php" method="post">
      <img class="mb-4" src="../../img/icone.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; Jhoni R. Souza da Costa - 2019</p>
    </form>
  </body>

</html>
