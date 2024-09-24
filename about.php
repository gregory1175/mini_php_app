<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP web site</title>
</head>
<body>
<?php require "blocks/header.php"?>
<div class="container mt-5">
<h3>Введите ваши контактные данные</h3>
<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Введите email" class="form-control"></br>
    <textarea type="text" name="message" placeholder="Введите ваще сообщение" class="form-control"></textarea></br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
</div>
<?php require "blocks/footer.php"?>  
</body>
</html>