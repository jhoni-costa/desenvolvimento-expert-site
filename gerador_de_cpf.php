<!DOCTYPE HTML>
<html lang="pt">
    <head>

        <?php require_once 'app/geraCpf.php';?>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    </head>

    <body>
        <div class="container">

        <?php include 'view/toolbar.php' ?>

            <div class="alert alert-info" role="alert">
                Site em Desenvolvimento! 
            </div>
            
            <div class="card">
                <h5 class="card-header">Gerador de CPF</h5>
                <div class="card-body">
                    <h5 class="card-title">Utilize apenas para Testes</h5>
                    <p class="card-text">A intenção é que utilize em testes onde precisa-se de um numero de cpf válido.</p>
                    <p class="card-text">Os numeros são gerados pelo algoritimo, coincidencias podem acontecer!.</p>
                    <form>
                        <input type="button" value="Gerar CPF" class="btn btn-primary" onClick="history.go(0)">
                    </form>
                    <br>
                    <div class="alert alert-success" role="alert">
                    <?php $cpf = mask($string, '###.###.###-##');?>
                       CPF: <?=$cpf?>
                    </div>
                </div>
            </div>
            
        </div>
    </body>

</html>
