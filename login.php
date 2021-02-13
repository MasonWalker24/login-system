<?php
$username = $_GET['username'];
$password = $_GET['password'];
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
$LoginInfo = file_get_contents("logins.txt");
if(strpos($LoginInfo, $combo) !== false)
{
  header("Location: /" . $url . "/index.php");
}
else
{
  header("Location: /index.html");
}
?>
