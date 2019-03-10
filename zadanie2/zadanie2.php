<link rel='stylesheet' href='css/style.css' />
<link rel='stylesheet prefetch' href='css/jquery.fancybox.min.css'>
<script src='js/jquery.fancybox.min.js'></script>
<script>
$(document).ready(function() {
   $(".two").fancybox({
       openEffect : 'none',
       closeEffect : 'none'
   });
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
    $galereya .="<a class=\"two\" rel=\"group\" href=\"img/real/$filename\"><img src=\"img/small/$filename\" alt=\"$filename\"></a>";
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

