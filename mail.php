<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:" .$name. "<" .$email. ">\r\n";

$recipient =  "n.r.ayala7@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,600&family=Poppins&display=swap" rel="stylesheet">

</head>

<body>
    <div class="cointener">
        <h1>Thank you for contacting me. I will get back to you as soon as posible!</h1>
        <p class="back">Go back to the
            <a href="index.html"></a>homepage</p>
    </div>
</body>

</html>';
?>