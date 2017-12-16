<?php
require ('mailer.php');


$message_body = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.\\n Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\\n It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\\n";

$message_subject = "Sample Lorem Ipsum mail";

$message_email = "farhan.tanvir.utshaw@gmail.com"; // receiver email address

$message_title = "Sample Titile";

$mailSender = new MailSender($message_email, $message_subject, $message_title, $message_body);

$mailSender->requestMailSend();


?>