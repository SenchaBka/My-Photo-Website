<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $message_sent = false;

    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $contacts = filter_input(INPUT_POST, "contacts", FILTER_SANITIZE_SPECIAL_CHARS);
        $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_SPECIAL_CHARS);
        $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_SPECIAL_CHARS);
        $place = filter_input(INPUT_POST, "place", FILTER_SANITIZE_SPECIAL_CHARS);
        $date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_SPECIAL_CHARS);
        $additional_info = filter_input(INPUT_POST, "additional_info", FILTER_SANITIZE_SPECIAL_CHARS);
    
        $emailSubject = "Photoshoot Appointment";
        $body = "";
    
        $body .= "Name: " .$name. "<br>";
        $body .= "Subject: " .$subject. "<br>";
        $body .= "Number of people: " .$number. "<br>";
        $body .= "Place: " .$place. "<br>";
        $body .= "Date and time: " .$date. "<br>";
        $body .= "Additional details: " .$additional_info. "<br>";

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'arsenii.buriak@gmail.com';
        $mail->Password = 'APP-PASSWORD-HERE';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('arsenii.buriak@gmail.com');
        $mail->addAddress('arsenii.buriak@gmail.com');
        $mail->isHTML(true);

        $mail->Subject = ($emailSubject);
        $mail->Body = ($body);
        $mail->send();

        $message_sent = true;
    }

    if ($message_sent)
        header("Location: thanks.html");
    else{
        echo
            "<script>
                alert('Error');
            </script>";
    }
?>