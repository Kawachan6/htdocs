<?php
session_start();

$_SESSION["name"] = "かわだ";
$_SESSION["num"] = 1000;

echo $_SESSION["name"];
echo $_SESSION["num"];



?>