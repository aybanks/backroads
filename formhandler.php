<?php
$visitor_email = $_POST['email'];


$email_from = 'info@localhost:8080/index.html';

$email_subject = 'New Form Submission';

$email_body = "User Email: $visitor_email";

$to ='ayodelebankole03@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");









?>