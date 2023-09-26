<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alltagshilfe Rammal</title>
    <link rel="shortcut icon" href="Mein Projekt-1 (2).png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Montserrat.css">

</head>
<body>
<?php

// Formulardaten aus dem globalen Array $_POST abrufen
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

// E-Mail-Kopfzeilen definieren
$to = 'mohamad.rammal@alltagshilfe-rammal.de';
$subject = '-Nachricht von:_-' . $name. 
           '-Telfonnummer:_-' . $phone. 
           '-Betreff:_' . $subject;
              
$headers = 'From: ' . $email . "\r\n" .
           'Reply-To: ' . $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// E-Mail senden
mail($to, $subject, $message, $headers);

// Bestätigungsnachricht an den Benutzer
echo 'Ihre Nachricht wurde erfolgreich versendet!';

?>


    
</body>
</html>

