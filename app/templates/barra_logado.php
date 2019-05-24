<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
        <img src="../../img/icone.png" width="40" height="40" alt="logo site">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Utilitários
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="gerador_de_cpf.php">Gerador de CPF</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo mais aqui</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../adm/nova-postagem.php">Criar Postagens</a>
        </li>
        </ul>
        <span class="navbar-text">
        <a class="navbar-brand" target="_blank" href="http://facebook.com/jhoni.costa">
            <img src="../../img/facebook.png" width="30" height="30" alt="logo facebook">
        </a>
        </span>
        <span class="navbar-text">
        <a class="navbar-brand" target="_blank" href="http://linkedin.com/in/jhonicosta">
            <img src="../../img/linkedin.png" width="30" height="30" alt="logo linkedin">
        </a>
        </span>
        <span class="navbar-text">
        <a class="navbar-brand" target="_blank" href="http://github.com/jhoni-costa">
            <img src="../../img/github.png" width="30" height="30" alt="logo github">
        </a>
        </span>
        <span class="navbar-text">
        <a class="navbar-brand" href='../view/logout.php?token=<?=md5(session_id())?>'>
            Sair
        </a>
        </span>
    </div>
</nav>