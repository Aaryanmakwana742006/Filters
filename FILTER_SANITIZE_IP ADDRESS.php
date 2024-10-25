<?php
$ip = "23.026862019006618";
if(filter_var($ip, FILTER_VALIDATE_IP)){
echo "The <b>$ip</b> is a valid IP address";
}
else
{
echo "The <b> $ip </b> is not a valid IP address";
}
?>