<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to = "support@sherif-elt.com";
    $body = 'Here your email body text';
    $subject = 'NEW Subscriber';
    $headers = 'MIME-Version: 1.0' . "\r\n"; 
    $headers .= "From: $email \r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    if($_POST['submit']){
        if(mail($to, $subject, $body, $headers)){
             echo "mail send"; // change this later to your header location
        }
        else{
            echo 'error sending mail';
        }
    }
    else{
        echo 'no post data';
    }
?>
