<link rel='stylesheet' href='css/style.css' />
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<script type="text/javascript">
$(document).ready(function() {
$(".two").fancybox({"width": 1024, "height": 640});
});
</script>
<h1>Галерея изображений</h1>
<main>
<?
$responce = scandir("img/small/");
$filelist = [];
$responce_real = scandir("img/real/");
$filelist_real = [];
$filelist = find_filename($responce);
$filelist_real = find_filename($responce_real);
$responce_dir = scandir("img/real/");
$i = 0;
$dir = [];

//print_r($responce_dir = scandir("img/small/"));
$dir = find_dir($responce_dir);


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
foreach ($filelist as $filename){
    $galereya .="<a class=\"two\" data-fancybox=\"example_group\" rel=\"group\" href=\"img/real/$filename\"><img src=\"img/small/$filename\" alt=\"$filename\"></a>";
}
$responce_real_user = scandir("img/real/$dir[0]");

$filelist = find_filename($responce_real_user);
foreach ($filelist as $filename){
    $galereya .="<a class=\"two\" data-fancybox=\"example_group\" rel=\"group\" href=\"img/real/$dir[$i]/$filename\"><img src=\"img/real/$dir[$i]/$filename\" alt=\"$filename\"></a>";
}
echo $galereya;
?>
<div class="cleardiv"></div>
<form action="load_file.php" method="POST" enctype="multipart/form-data">
	<p>Загрузите файл на сервер</p>
	<input type="file" name="photo[]" multiple accept="image/jpeg"><br><br>
	<input type="submit" value="Сохранить">
	
</form>

</main>
<?
/*Функция поиска файлов в директории*/
function find_filename($responce_f){
    $k = 0;
    foreach ($responce_f as $value){
        if (strpos($value,"jpg") != false){
            $filelist_f[$k] = $value;
            $k++;
        }
    }
    return $filelist_f;
}

/*Функция поиска директорий*/

function find_dir($responce_dir){
    $i = 0;
    foreach ($responce_dir as $key){
        if (is_dir($key) and ($key!='.' and $key!='..')){
        $dir[$i] = $key;
        $i++;
        }
    }
    return $dir;
    }
?>


