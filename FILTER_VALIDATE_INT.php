<?php
$int = 7;
if(filter_var($int, FILTER_VALIDATE_INT)){
echo "The <b>$int</b> is a valid integer";
}
else
{
echo "The <b>$int</b> is not a valid integer";
}
?>