<?php
require_once './pages/header.php';
require_once './dao/NoticiaDaoMysql.php';

$noticias = new NoticiaDaoMysql($pdo);
$newNoticias = $noticias->getAllNoticies();
?>

<main>
  <div class="container">
    <div class="body">
      <?php if ($newNoticias !== false) : ?>
        <?php foreach ($newNoticias as $item) : ?>
          <div class="noticia-item">
            <div class="noticia-title">
              <?= mb_strimwidth($item->title, 0, 22, "..."); ?>
            </div>
            <div class="noticia-body">
              <?= mb_strimwidth($item->body, 0, 200, "..."); ?>
            </div>
            <div class="noticia-button">
              <a href="<?= $base; ?>">Ver</a>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <h2>Nenhuma Noticia Cadastrada!</h2>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php require_once './pages/footer.php'; ?>