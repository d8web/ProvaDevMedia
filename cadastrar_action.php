<?php

require_once './config.php';
require_once './dao/NoticiaDaoMysql.php';
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
$body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);

if ($title && $body) {
    $noticia = new NoticiaDaoMysql($pdo);
    $noticia->add($title, $body);
    $_SESSION['sucess'] = 'Noticia Cadastrada com sucesso!';
    header('Location: ' . $base . '/cadastrar.php');
    exit;
} else {
    $_SESSION['flash'] = 'Preencha todos os campos!';
    header('Location: ' . $base . '/cadastrar.php');
    exit;
}
