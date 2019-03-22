<?
session_start();


//session_id();
print_r($_SESSION);
$login = strip_tags($_POST['login']);
$pass = strip_tags($_POST['pass']);

$test = "qweRTyuI".$pass.$login;
$str = md5($test);
$connect = mysqli_connect("localhost","root","","lesson6php");
$query = "select * from users where name_user='$login' and pass_user='$str'";
$res = mysqli_query($connect,$query);
$data = mysqli_fetch_assoc($res);
$id_user = $data['id'];

if(mysqli_num_rows($res)>0){
	$_SESSION['login']=$login;
    $_SESSION['pass']=$pass;
    echo "Вы успешно авторизованы! Добро пожаловать ".$data['name_user']."!";
    $_SESSION['autorization'] = 1;
    print_r($_SESSION);
    exit;
    
}
	
else
    echo "Неправильный логин или пароль! Повторите снова!";
    $_SESSION['autorization'] = 0;