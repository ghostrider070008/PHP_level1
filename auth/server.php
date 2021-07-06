<?
ob_start("gz_handler");
$login = strip_tags($_POST['login']);
$pass = strip_tags($_POST['pass']);

$connect = mysqli_connect("localhost","root","","lesson7");
$query = "select * from users where login='$login' and pass='$pass'";

$res = mysqli_query($connect,$query);
$data = mysqli_fetch_assoc($res);
$id_user = $data['id'];

if(mysqli_num_rows($res)>0){
	setcookie("login",$login);
	setcookie("pass",$pass);
	setcookie("id_user",$id_user);
	echo "Вы успешно авторизованы!";
}
	
else
	echo "Возникла ошибка при авторизации!";