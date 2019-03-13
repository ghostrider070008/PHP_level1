<link rel='stylesheet' href='css/style.css' />
<h1>Галерея изображений</h1>
<main>
<?
$responce = scandir("img/small/");
$filelist = [];
$responce_real = scandir("img/real/");
$filelist_real = [];
$filelist = find_filename($responce);
$filelist_real = find_filename($responce_real);
/*foreach ($responce as $value){
    if (strpos($value,"jpg") != false){
        $filelist [] = $value;
    }
}
foreach ($responce_real as $value){
    if (strpos($value,"jpg") != false){
        $filelist [] = $value;
    }
}*/
include('config.php');
$sql = "select * from foto";
$res = mysqli_query($connect,$sql);
print_r($data);
while ($data = mysqli_fetch_assoc($res)){
echo '<a href="'.$data['url_foto'].'" target="_blank"><img src="'.$data['url_foto'].'" alt="'.$data['name_foto'].'"></a>';
}
foreach ($filelist as $filename){
    $galereya .="<a href=\"img/real/$filename\" target=\"_blank\"><img src=\"img/small/$filename\" alt=\"$filename\"></a>";
}
echo $galereya;
?>
<div class="cleardiv"></div>
</main>
<?
/*Функция поиска файлов в директории*/
function find_filename($responce_f){
    foreach ($responce_f as $value){
        if (strpos($value,"jpg") != false){
            $filelist_f [] = $value;
        }
    }
    return $filelist_f;
}
?>

