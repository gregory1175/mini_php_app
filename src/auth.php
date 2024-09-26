<?php

    if (($_COOKIE['user']) == "true") {
        setcookie('user', 'true', Time() - 60*60*24*30, '/'); // Добавьте поддомены, если требуется
    } else {
        setcookie('user', 'true', Time() + 60*60*24*30, '/'); // Добавьте поддомены, если требуется
    }

    header('Location: /');
    exit;

