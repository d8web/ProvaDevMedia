<?php
require_once './pages/header.php';
require_once './dao/NoticiaDaoMysql.php';

$searchTerm = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS);

$noticias = new NoticiaDaoMysql($pdo);
$newNoticias = $noticias->getBySearch($searchTerm);
?>

<main>
    <div class="container">
        <div class="body">
            <?php if ($newNoticias !== false) : ?>
                <?php foreach ($newNoticias as $item) : ?>
                    <div class="noticia-item">
                        <div class="noticia-title">
                            <?= $item->title; ?>
                        </div>
                        <div class="noticia-body">
                            <?= mb_strimwidth($item->body, 0, 130, "..."); ?>
                        </div>
                        <div class="noticia-button">
                            <a href="<?= $base; ?>">Ver</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h2>Nenhuma Noticia Para Mostrar!</h2>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php require_once './pages/footer.php'; ?>