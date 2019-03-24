<?
session_start();
//session_id();
print_r($_POST);
$login_users = strip_tags($_POST['login']);
$pass_users = strip_tags($_POST['pass']);
$_POST = [];
echo $pass_users;
//$pass_users = "qweRTyuI".$pass_users.$login_users;
$str = md5($pass_users);
print_r($str);
include('config.php');
$query = "select * from users where login='$login_users' and pass='$str'";
$res = mysqli_query($connect,$query);
$data = mysqli_fetch_assoc($res);
$id_user = $data['id'];


if(mysqli_num_rows($res)>0){
	$_SESSION['autorization'] = 1;
    $_SESSION['id_users'] = $data['id']; 
    $_SESSION['names'] = $data['names'];
    $new_url = 'index.php';
    header('Location: '.$new_url);
    //echo "Вы успешно авторизованы! Добро пожаловать ".$data['names']."!";
    //print_r($_SESSION);
    exit;
    
}
	
else{
    $_SESSION['autorization'] = -1;
    echo "Неправильный логин или пароль! Повторите снова!";
}