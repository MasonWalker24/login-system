<?php
$password = $_GET['password'];
$username = $_GET['username'];
//$combo = $username + $password;
fopen("logins.txt", "a");
$file = fopen("logins.txt", "a");
//fwrite($file, $username + $password, "a");
?>
