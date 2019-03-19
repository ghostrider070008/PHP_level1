<?
include('config.php'); //подключение файла конфигурации к БД
$id = (int)$_GET['id'];
$sql = "select * from tovar where id=".$id;
$res = mysqli_query($connect,$sql);
$tovar = '';
$data = mysqli_fetch_assoc($res);
    $tovar .= '<div class="tovar">';
    $tovar .= '<h2>'.$data['title'].'</h2>';
    $tovar .= '<div class="t_1">';
    $tovar .= '<img src="img/catalog/'.$data['img'].'" alt="Здесь было фото">';
    $info = $data['info'];
    /*
   // $info = strip_tags($info); // убираем теги
   $info = substr($info, 0, 299); // обрезаем текст
   $info = rtrim($info, "!,.-"); // проверяем последний символ на ! и . -
   $info = substr($info, 0, strrpos($info, ' ')); //находим последний пробел, устраняем его и ставим троеточие
   $info .="...";
   */
    $tovar .= '<p class="p_info">'.$info.'</p>';
    $tovar .= '<div class="clear"></div></div>';
    $tovar .= ' <div class="t_2">';
    $tovar .= '<p class="p_price">'.$data['price'].'&#8381;</p>';
    $tovar .= '<a href="#">Купить</a></div><div class="clear"></div></div></div>';
    echo $tovar;
?>