<?php
$action = $_GET['action'] ?? null;

if ($action === 'logout' && isset($_COOKIE['user']) && $_COOKIE['user'] === "true") {
    setcookie('user', 'true', time() - 60*60*24*30, '/');
    header('Location: /'); 
    exit;
} elseif ($action === 'login' && (!isset($_COOKIE['user']) || $_COOKIE['user'] !== "true")) {
    setcookie('user', 'true', time() + 60*60*24*30, '/');
    header('Location: /');
    exit;
}


