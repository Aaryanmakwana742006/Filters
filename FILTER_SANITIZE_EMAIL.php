<?php
$email = "someone@123example.com";
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
if($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "The $email is a valid email address";
}
else
{
echo "The $email is not a valid email address";
}
?>