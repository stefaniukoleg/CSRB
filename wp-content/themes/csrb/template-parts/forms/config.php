<?php
    $recepient = "xxxmechanikxxx@gmail.com";
    $recepient1 = "info@csrb.com.ua";
    $sitename = "CSRB";

    $name = trim($_POST["user_name"]);
    $email = trim($_POST["user_email"]);
    $phone = trim($_POST["user_phone"]);
    
    if ( $_POST['personal_information'] ) {
        $travel_date = trim($_POST["travel_date"]);
        $travel_place = trim($_POST["travel_place"]);
        $travel_transport = trim($_POST["travel_transport"]);
        $travel_duration = trim($_POST["travel_duration"]);
        $visa_availability = trim($_POST["visa_availability"]);
        $travelers_number = trim($_POST["travelers_number"]);
        $message = "Ім'я: $name \nemail: $email \nТелефон: $phone \nКоли планується подорож: $travel_date \nКуди: $travel_place \nЯким транспортом: $travel_transport \nТривалість планового перебування: $travel_duration \nНаявність віз Шенген за останні 3 роки: $visa_availability \nКількість подорожуючих: $travelers_number";
        $pagetitle = "Анкетна інформація \"$sitename\"";
    }
    else {
        $message = "Ім'я: $name \nemail :$email \nТелефон: $phone";
        $pagetitle = "Замовлення дзвінка \"$sitename\"";
    }
    
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
    

    mail($recepient1, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
    
?>