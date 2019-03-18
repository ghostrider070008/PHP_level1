<?
include('config.php'); //подключение файла конфигурации к БД
$sql = "select * from tovar order by id asc";
$res = mysqli_query($connect,$sql);
?>

