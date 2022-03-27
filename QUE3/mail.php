<?php
$to_email = "mukundbaba1@gmail.com";
$subject = "Comfirmatory Email via PHP";
$message = "Hi, this is test email send by PHP in 2022";
$from="abc@gmail.com";
$headers = "From : $from";

if (mail($to_email, $subject, $message, $headers)) {
    echo "Email sent successfully to $to_email <br>";
} else {
    echo "Email sending failed <br>";
}
?>