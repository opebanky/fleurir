<?php
    $to = 'info@fleurirconcept.com';
    $firstname = $_POST["name"];
    $email= $_POST["email"];
    $subject = "Fleurir Contact Form";
    $text= $_POST["subject"];
    $message1= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $firstname . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Subject: '.$text.'</td></tr>
        <tr><td>Text: '.$message1.'</td></tr>
        
    </table>';

    if (@mail($to, $subject, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
