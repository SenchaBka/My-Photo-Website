<?php

    if(isset($_POST['name']) && !empty($_POST['name'])){

        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_SPECIAL_CHARS);
        $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_SPECIAL_CHARS);
        $place = filter_input(INPUT_POST, "place", FILTER_SANITIZE_SPECIAL_CHARS);
        $date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_SPECIAL_CHARS);
        $additional_info = filter_input(INPUT_POST, "additional_info", FILTER_SANITIZE_SPECIAL_CHARS);
    
    
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
    }

?>