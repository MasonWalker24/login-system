<?php
$password = $_GET['password'];
$username = $_GET['username'];
$combo = $username;
$combo .= $password;
fopen("logins.txt", "a");
$file = fopen("logins.txt", "a");
//fwrite($file, $username + $password);
echo $combo;
?>
