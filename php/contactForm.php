<?php
$error = "";

if (isset($_POST["mailSubmit"])) {
    $mailFrom = $_POST["mailVisitor"];
    $message = $_POST["mailMessage"];
    $subject = $_POST["mailSubject"];
    $name = $_POST["mailName"];
 
    
    if (empty($visitor)) {
        $error .= "Vul een geldig email adres in. <br>";
    }
    if (empty($message)) {
        $error .= "Vul een geldig email adres in. <br>";
    }
    
    if ($error !== "") {
        header("Location: ../index.php");
        exit;
    }
    
    $mailTo = "vandenbergh.martijn@gmail.com";
    $headers = "From: " . $mailFrom;
    $fullMessage = "You have a new email from: " . $name . ".\n\n" . $message;
    
    mail($mailTo, $subject, $fullMessage, $headers);

    header("Location: ../index.php?action=mailSent");
}