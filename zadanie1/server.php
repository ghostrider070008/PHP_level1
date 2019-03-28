<?
session_start();
//session_id();
//print_r($_POST);
include('config.php');
$login_users = strip_tags($_POST['login']);
//$login_users = sqlite_escape_string($login_users);
$login_users = mysqli_real_escape_string($connect, $login_users); // экранирование
$pass_users = strip_tags($_POST['pass']);
//$pass_users = sqlite_escape_string($pass_users);
$pass_users = mysqli_real_escape_string($connect,$pass_users); //экранирование
$_POST = [];
//echo $pass_users;
$pass_users = "qweRTyuI".$pass_users.$login_users;
$str = md5($pass_users);
//print_r($str);
$query = "select * from users where name_user='$login_users' and pass_user='$str';";
$res = mysqli_query($connect,$query);
echo $query;
$data = mysqli_fetch_assoc($res);
$id_user = $data['id'];


if(mysqli_num_rows($res)>0){
	$_SESSION['autorization'] = 1;
    $_SESSION['id_users'] = $data['id']; 
    $_SESSION['names'] = $data['names'];
    //$new_url = 'index.php';
    //header('Location: '.$new_url);
    $json_per = true;
    echo json_encode($json_per);
    //echo "Вы успешно авторизованы! Добро пожаловать ".$data['names']."!";
    //print_r($_SESSION);
    exit;
    
}
	
else{
    $_SESSION['autorization'] = -1;
    echo "Неправильный логин или пароль! Повторите снова!";
}