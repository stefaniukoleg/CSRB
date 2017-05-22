<?php
    $recepient = "xxxmechanikxxx@gmail.com";
    $sitename = "CSRB";

    $name = trim($_POST["user_name"]);
    $email = trim($_POST["user_email"]);
    $phone = trim($_POST["user_phone"]);
    //$text = trim($_POST["text"]);
    $message = "Ім'я: $name \nemail :$email \nТелефон: $phone";

    $pagetitle = "Замовлення дзвінка \"$sitename\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
