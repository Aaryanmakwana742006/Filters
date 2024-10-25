<?php
$url = "http:://www.youtube.com";
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
if($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)){
echo "The $url is a valid website url";
}
else
{
echo "The $url is not a valid website url";
}
?>
