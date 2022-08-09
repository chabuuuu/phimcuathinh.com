<?php
    $email=$_POST['email'];
    $subject = 'Your subject for email';
    $message = 'Body of your message';

    mail($email, $subject, $message);
?>