<?php
$username = $_GET['username'];
$password = $_GET['password'];
$combo = $username;
$combo .= $password;
$LoginInfo = file_get_contents("logins.txt");
echo $LoginInfo;
if(strpos($LoginInfo, $combo) !== false)
{
  
}
?>
