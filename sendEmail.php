<?php

if (isset($_POST['email']) && isset($_POST['message']) && isset($_POST['recipient'])) {
   // $to = $_POST['recipient'];
    $to = 'kosmina.gregor@gmail.com';
    $subject = 'Neue Nachricht von der Website';

    $email = $_POST['email'];
    $date = date("Y-m-d");
    $time = date('H:i');
    $msg = $_POST['message'];


    $message = "<br>Eine Nachricht wurde an Sie gesendet uber http://www.bex.at/.    
    <br><br>
    <b>Datum:</b> $time $date<br>    
    <b>Nachricht:</b> $msg";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: '" . $email . "'" . "\r\n";

    mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}




