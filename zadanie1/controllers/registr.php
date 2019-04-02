
<?session_start();?>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/jquery.maskedinput.min.js"></script>
<?print_r($_POST['captcha']);
print_r($_SESSION['captcha']);
$captcha = addslashes(strip_tags($_POST['captcha']));
echo $captcha;
if ($_SESSION['captha']==$captcha){
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
//print_r($_POST);
$_POST = [];
$sql = "SELECT id,login,email,tel FROM buyers WHERE login='$login_user' or email='$email' or tel='$tel';";
$res = mysqli_query($connect,$sql);
    if (mysqli_num_rows($res)==0){
        $sql = "INSERT INTO buyers (login, pass, firstname, laststname, email, tel, adress) VALUES ('$login_user', '$pass_user', '$first_name', '$last_name', '$email', '$tel', '$adress');";
        $res = mysqli_query($connect,$sql);
        echo "Пользователь успешно зарегистрирован! Нажмите OK";
        $content = '<a href="../index.php">OK</a>';
        echo $content;
       // header ('Location: ../index.php');  // перенаправление на нужную страницу
      //  exit;
        //echo $sql;
        
    }
    else {
        $sql = "SELECT id,login,email,tel FROM buyers WHERE login='$login_user';";
        $res = mysqli_query($connect,$sql);
        if (mysqli_num_rows($res)>0){
            echo "Пользователь с таким логином уже зарегистрирован";
        }
        else{
        $sql = "SELECT id,login,email,tel FROM buyers WHERE email='$email';";
        $res = mysqli_query($connect,$sql);
            if (mysqli_num_rows($res)>0){
            echo "Пользователь с таким e-mail уже зарегистрирован";
        }
        else{
            $sql = "SELECT id,login,email,tel FROM buyers WHERE tel='$tel';";
            $res = mysqli_query($connect,$sql);
            if (mysqli_num_rows($res)>0){
             echo "Пользователь с таким номером телефона уже зарегистрирован";
             }
            }
        }
        $content = '<div class="home" onclick="registr();">Еще раз</div>';
        echo $content;
    }
}
}
else{
    echo 'Решите правильно пример!<div class="home" onclick="registr();">Еще раз</div>';
}
?>
<script>

function registr(){
    document.location.href = "../views/registr.php";
}
function home(){
    document.location.href = "../index.php";
}
</script>