<?session_start();
require_once('../config.php');
//print_r($_POST);
$login_user = addslashes(strip_tags($_POST['login']));
$pass_user = addslashes(strip_tags($_POST['pass']));
$pass_user2 = addslashes(strip_tags($_POST['pass2']));
if ($pass_user!==$pass_user2){
    echo "Не совпадают пароли";
}
else {
$pass_user = 'QWERtyuIUkl'.$pass_user.$login_user;
$pass_user = md5($pass_user);
$first_name = addslashes(strip_tags($_POST['firstname']));
$last_name = addslashes(strip_tags($_POST['lastname']));
$email = addslashes(strip_tags($_POST['email']));
$tel = addslashes(strip_tags($_POST['tel']));
$adress = addslashes(strip_tags($_POST['adress']));
$sql = "SELECT id,login,email,tel FROM buyers WHERE login='$login_user' or email='$email' or tel='$tel';";
$res = mysqli_query($connect,$sql);
    if (mysqli_num_rows($res)=0){
        $sql = "INSERT INTO buyers (login, pass, firstname, latname, email, tel, adress) VALUES ('$login_user', '$pass_user', '$first_name', '$last_name', '$email', '$tel', 'adress')";
        $res = mysqli_query($connect,$sql);
        echo "Пользователь успешно зарегистрирован";
    }

}