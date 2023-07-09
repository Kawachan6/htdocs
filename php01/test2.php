<?php
$name = "川田";
$age = 30;
echo $name;
echo "私は".$name."です";
// echo "私は $name です";

$message = "年齢は"; //JS: message = "年齢は"
$message .= $age; //message += age
$message .= "です"; //message += "です"
echo $message;

?>