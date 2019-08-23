<?php
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if (trim($email) == '') {
      $error = 'Введите ваш email';
    } else if (trim($message) == '' ) {
      $error = 'Введите ваше сообщения';
    } else if (strlen($message) < 10) {
      $error = 'Сообщения должно иметь как минимум 10 символов';
    }

    if ($error != '') {
      echo $error;
      exit;
    }

    $to = 'ivanigorolenyk@gmail.com';
    $subject = 'Заголовок сообщения';
    $headers = "From: $email\r\nReplay-to: $email\r\n";
    mail ($to, $subject, $message, $headers);
    header ('Location: /about.php');

?>
