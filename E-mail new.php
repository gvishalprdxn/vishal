<?php
$to = "vishal.gogari@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "vishal.gogari.prdxn@gmail.com";
$headers = "From:vishal" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>