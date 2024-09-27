<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

?>
<?php includeTemplate('layout/header.php', ['title' => 'Главная страница', 'headTitle' => 'Главная страница']);?>
<div class="container mt-5">
    <h3>Введите ваши контактные данные</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Введите email" class="form-control"></br>
            <textarea type="text" name="message" placeholder="Введите ваще сообщение" class="form-control"></textarea></br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
</div>
<?php includeTemplate('layout/footer.php'); ?>
