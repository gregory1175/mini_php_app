<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?=$headTitle?></title>
</head>
<header class="d-flex container flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <h1><?=$headTitle?></h1>
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Gr1175</span>
    </a>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">Контакты</a></li>
        </ul>
    </nav>
    <?php 
    if (isset($_COOKIE['user']) && $_COOKIE['user'] == 'true'): 
    ?>
        <a class="btn btn-outline-primary" href="/auth">Кабинет пользователя</a>
    <?php else: ?>
        <a class="btn btn-outline-primary" href="/auth">Войти</a>
    <?php endif; ?>
</header>
