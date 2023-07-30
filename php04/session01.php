<?php

session_start();

$sid = session_id();

echo $sid;

$_SESSION["name"] = "川田";
$_SESSION["age"] = 34;
