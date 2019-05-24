<?php

require_once '../controller/PostagemController.php';

$controller = new PostagemController();
$postagem = $controller->salvarPostagem();