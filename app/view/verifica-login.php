<?php 
    require_once '../controller/UsuarioController.php';
    session_start();
    $controler = new UsuarioController();
    $controler->verificaLogin();