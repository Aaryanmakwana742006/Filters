<?php
$comment = "<h1>Hey there! How are you doing today?</h1>";
$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
echo $sanitizedComment;
?>