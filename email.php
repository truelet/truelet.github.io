<?php
$email = trim($_REQUEST["email"]);
$to = "truelet.info@gmail.com";
$subject = "Email Subscribe";
$txt = "New user subscribed for newsletter : $email";
$headers = "From: $email";

mail($to,$subject,$txt,$headers);
header("location: index.html");
?>