<?php

// Вариант 4: Написать скрипт, отправляющий полученное через форму письмо указанному адресату.
// Для подтверждения отправки создать текстовую и (или) графическую капчу.

$email = $_POST["email"];
$subject = $_POST["subject"];
$text = $_POST["text"];

if (isset($email) && isset($text) && isset($subject)) {

    session_start();
    if($_POST['code'] == $_SESSION['rand_code']) {
    
       // $text = wordwrap($text, 70, "\r\n");
        if (mail($email, $subject, $text)) { echo "Сообщение было принято для передачи<br/><br/>"; }
        else { echo "Ошибка. Сообщение не отправлено<br/><br/>"; }
    }
    else { echo "Неверная капча.<br/><br/>"; }
}


include("form.html");  