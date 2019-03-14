<?
$server = "localhost";
$login = "root";
$pass = "";
$db = "lesson5php";
$connect = mysqli_connect($server,$login,$pass,$db);
mysqli_set_charset($connect,"utf8");