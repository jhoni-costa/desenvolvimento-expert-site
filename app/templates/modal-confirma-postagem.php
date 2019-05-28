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