<?php
$password = $_GET['password'];
$password2 = $_GET['password2'];
$username = $_GET['username'];
if ($password == $password2)
{
  header("Location: /signuperror.html");
}
else
{
$combo = $username;
$combo .= $password;
$url = $combo;
$url = str_replace("a", "1", $url);
$url = str_replace("e", "2", $url);
$url = str_replace("i", "3", $url);
$url = str_replace("o", "4", $url);
$url = str_replace("u", "5", $url);
$url = str_replace("b", "f", $url);
$url = str_replace("r", "d", $url);
$url = str_replace("n", "m", $url);
$url = str_replace("s", "l", $url);
$url = str_replace("t", "w", $url);
fopen("logins.txt", "a");
$file = fopen("logins.txt", "a");
fwrite($file, $combo);
mkdir($url);
fopen($url . "/index.php", "w");
header("Location: index.html");
}
?>
