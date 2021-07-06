<?
$pass = "admin";
$login = "admin";
$test = "qweRTyuI".$pass.$login;
$str = md5($test);
echo $str;