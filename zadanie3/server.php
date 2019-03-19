<?include('config.php');
$name_users = strip_tags($_POST['name_user']);
$email_user = strip_tags($_POST['email_user']);
$otziv_user = strip_tags($_POST['otziv_user']);
$date = date('Y-m-d');

$sql = 'INSERT INTO otziv (name_user, date_otziv, text_otziv) VALUES (\''.$name_users.'\', \''.$date.'\', \''.$otziv_user.'\')'; 
$res = mysqli_query($connect,$sql);
if ($res){
    echo "Отзыв оставлен";
}
else{
    echo "Произошла ошибка";
}