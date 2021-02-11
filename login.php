<?php
$username = $_GET['username'];
$password = $_GET['password'];
$combo = $username;
$combo .= $password;
$LoginInfo = readfile(/logins.txt);
if(strpos($logininfo, $combo) !== false)
{

}
?>
