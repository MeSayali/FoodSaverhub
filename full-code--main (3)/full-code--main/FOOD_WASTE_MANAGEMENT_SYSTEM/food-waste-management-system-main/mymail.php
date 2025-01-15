 <?php
$to_email = "sakshijaysingpure5@gmail.com";
$subject = "user send a request";
$body = "Hi,someone doante food on your application, please check it from your login..";
$headers = "From: jaysingpuresakshi@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
 echo "your request is successfully send to the admin ...";
} else {
    echo "notification sending failed...";
}

?>