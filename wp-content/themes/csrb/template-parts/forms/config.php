<?php
    $recepient = "xxxmechanikxxx@gmail.com";
    $sitename = "CSRB";

    $name = trim($_POST["user_name"]);
    $email = trim($_POST["user_email"]);
    $phone = trim($_POST["user_phone"]);

    $form_name = pll__('Ім\'я');
    $form_phone = pll__('Телефон');

    if ( $_POST['personal_information'] ) {
        $travel_date = trim($_POST["travel_date"]);
        $travel_place = trim($_POST["travel_place"]);
        $travel_transport = trim($_POST["travel_transport"]);
        $travel_duration = trim($_POST["travel_duration"]);
        $visa_availability = trim($_POST["visa_availability"]);
        $travelers_number = trim($_POST["travelers_number"]);

        $form_travel_date = pll__('Коли планується подорож');
        $form_travel_place = pll__('Куди');
        $form_travel_transport = pll__('Яким транспортом');
        $form_travel_duration = pll__('Тривалість планового перебування');
        $form_visa_availability = pll__('Наявність віз Шенген за останні 3 роки');
        $form_travelers_number = pll__('Кількість подорожуючих');

        $message = "
            $form_name: $name \n
            email: $email \n
            $form_phone: $phone \n
            $form_travel_date: $travel_date \n
            $form_travel_place: $travel_place \n
            $form_travel_transport: $travel_transport \n
            $form_travel_duration: $travel_duration \n
            $form_visa_availability: $visa_availability \n
            $form_travelers_number: $travelers_number";
        $pagetitle = pll__('Анкетна інформація') . " \"$sitename\"";
    }
    else {
        $message = "$form_name: $name \nemail :$email \n$form_phone: $phone";
        $pagetitle = pll__('Замовлення дзвінка') . " \"$sitename\"";
    }
    
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
