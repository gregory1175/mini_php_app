<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

?>
<?php includeTemplate('layout/header.php', ['title' => 'Главная страница', 'headTitle' => 'Главная страница']);?>

  <main class="container mt-5">
    <h3>Мои Статьи</h3>
    <div class="d-flex flex-wrap">
        <?php for ($i = 0; $i < 5; $i++):   ?>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Просто текст</h4>
                    </div>
                    <div class="card-body">
                    <img src="img/<?php echo $i + 1 ?>.jpg" alt="image" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                    </div>
                </div>
        <?php endfor;?>
    </div>
</main>

<?php includeTemplate('layout/footer.php'); ?>
