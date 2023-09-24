<?php

    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $number = $_POST["number"];
    $place = $_POST["place"];
    $date = $_POST["date"];
    $additional_info = $_POST["additional_info"];


    $to = "senchab@ukr.net";
    $emailSubject = "Photoshoot Appointment";
    $body = "";

    $body .= "Name: " .$name. "\r\n";
    $body .= "Subject: " .$subject. "\r\n";
    $body .= "Number of people: " .$number. "\r\n";
    $body .= "Place: " .$place. "\r\n";
    $body .= "Date and time: " .$date. "\r\n";
    $body .= "Additional details: " .$additional_info. "\r\n";

    mail($to, $emailSubject, $body);

?>