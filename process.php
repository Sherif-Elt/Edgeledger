<?php 
if (isset($_POST['submit'])); {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "support@sherif-elt.com";
    $headers = "From: ".$mailFrom;
    $txt = "you have recieved an e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $txt, $headers );
    header("Location:index.php?mailsend");
}
?>