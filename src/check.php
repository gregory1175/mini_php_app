<?php 

if (isset($_POST['email']) && isset($_POST['message'])) {

    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if (trim($email) == '' && trim($message) == '') {
        $error = 'Заполните поля для отправки сообщения';
    } elseif (trim($email) == '') { 
        $error = 'Введите ваш email';
    } elseif (trim($message) == '') {
        $error = 'Введите сообщение';
    } elseif (strlen($message) < 10) {
        $error = 'Сообщение должно быть больше 10 символов';
    }

    if ($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    mail('gredmyr@gmail.com', $subject, $message, $headers);
    header('Location: /about');
    exit;

} else {
    echo "";
}
