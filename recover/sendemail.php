<?php
    $name = "Atul Vishwakarma";
    $email = "yashinfotech2013@gmail.com";
    $message = "Test";
    $to = "tejasvi.kanade2012@gmail.com";
    $subject = "LateMangoes Contact : $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Die with a success message
    die("<div class='thanks'>Thanks for submitting your email! Our manager will contact you shortly.</div>");
?>