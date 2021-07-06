<?
include('config.php'); //подключение файла конфигурации к БД
$sql = "select * from otziv order by id asc";
$res = mysqli_query($connect,$sql);
$otziv = '';
while ($data = mysqli_fetch_assoc($res)){
    $otziv .= '<div class="date_otziv">'.$data['date_otziv'].'</div>';
    $otziv .= '<div class="name_user">'.$data['name_user'].'</div>';
    $otziv .= '<div class="text_otziv">'.$data['text_otziv'].'</div>';
   
}
echo $otziv;
?>

