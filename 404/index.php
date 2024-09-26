<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

?>
<?php includeTemplate('layout/header.php', ['title' => 'Ошибка', 'headTitle' => 'Ошибка']);?>

  <main class="container mt-5">
    <h3>Ошибка 404</h3>
</main>

<?php includeTemplate('layout/footer.php'); ?>
