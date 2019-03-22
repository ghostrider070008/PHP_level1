<?
session_start();


//session_id();
$login = strip_tags($_POST['login']);
$pass = strip_tags($_POST['pass']);

$test = "sfsdfdg4534".$pass;
$str = md5($test);
$connect = mysqli_connect("localhost","root","","lesson7");
$query = "select * from users where login='$login' and pass=md5($pass)";

$res = mysqli_query($connect,$query);
$data = mysqli_fetch_assoc($res);
$id_user = $data['id'];

if(mysqli_num_rows($res)>0){
	$_SESSION['login']=$login;
	$_SESSION['pass']=$pass;
	echo "Вы успешно авторизованы!";
}
	
else
	echo "Возникла ошибка при авторизации!";