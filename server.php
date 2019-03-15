<?
include "config.php";
$id = $_GET['id'];
$views = $_GET['v'];
$views++;
$sql = "update foto set views=$views where id=$id";
mysqli_query($connect,$sql);
?>


