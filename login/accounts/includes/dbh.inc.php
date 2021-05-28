<?php

$serverName = "localhost";
$dBUsername = "comhrai";
$dBPassword = "Abbiemae752017!";
$dBName = "users";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}