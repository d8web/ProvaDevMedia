<?php require_once './config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/responsive.css" />
    <title>Prova | Daniel</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="top-nav">
                <div class="logo">
                    <a href="<?= $base; ?>">Logo</>
                </div>
                <nav class="desktop">
                    <ul>
                        <li>
                            <a href="<?= $base; ?>/cadastrar.php">Cadastrar Noticias</a>
                        </li>
                        <li>
                            <a href="<?= $base; ?>">Exibir Notícias</a>
                        </li>
                        <li>
                            <form action="<?= $base; ?>/search.php" method="post" id="form">
                                <input type="text" name="search" autocomplete="off" placeholder="Pesquisar..." />
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>