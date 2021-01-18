<?php require_once './pages/header.php'; ?>

<main>
    <div class="container">
        <div class="body">
            <div class="form-cadastrar">
                <form action="<?= $base; ?>/cadastrar_action.php" method="post" id="form-cadastrar">

                    <?php if (!empty($_SESSION['flash'])) : ?>
                        <div class="flash">
                            <?= $_SESSION['flash']; ?>
                            <?php $_SESSION['flash'] = ''; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($_SESSION['sucess'])) : ?>
                        <div class="sucess">
                            <?= $_SESSION['sucess']; ?>
                            <?php $_SESSION['sucess'] = ''; ?>
                        </div>
                    <?php endif; ?>

                    <input type="text" name="title" autocomplete="off" placeholder="Digite o Título" />
                    <textarea class="text-area-label" name="body" rows="10" placeholder="Digite sua a notícia"></textarea>
                    <input type="submit" value="Cadastrar" />
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once './pages/footer.php'; ?>