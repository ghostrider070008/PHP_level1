<link rel='stylesheet' href='css/style.css' />
<script src="js/jquery.js"></script>
<script>
    function show()
		{
			$.ajax({
				url: "zadanie1.php",
				cache: false,
				success: function(html){
					$("#content").html(html);
				}
			});
		}
	
	function f(id_good, views_count){
		$.ajax({
			method:"GET",
			url:"server.php",
            cashe: false,
			data: {id:id_good,v:views_count},
		})
        $.ajax({
			method:"GET",
			url:"page2.php",
			data: {id:id_good}
		})
        .done(function(answer){
            
        })
	}
</script>
<div id="content">
<h1>Галерея изображений</h1>
<main>
    <section>
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
$sql = "select * from foto order by views desc";
$res = mysqli_query($connect,$sql);
$galereya='';
while ($data = mysqli_fetch_assoc($res)){
$galereya.='<a href="page2.php?id='.$data['id'].'&v='.$data['views'].'" target="_blank" onclick="f('.$data['id'].','.$data['views'].');show();"><img src="'.$data['url_foto'].'" alt="'.$data['name_foto'].'"></a>';
}
echo $galereya;

/*
foreach ($filelist as $filename){
    $galereya .="<a href=\"img/real/$filename\" target=\"_blank\"><img src=\"img/small/$filename\" alt=\"$filename\"></a>";
}*/
?>
        <div class="cleardiv"></div>
        <form action="load_file.php" method="POST" enctype="multipart/form-data">
	<p>Загрузите файл на сервер</p>
	<input type="text" id="file_name" name="name" >
	<input type="file" name="photo[]" multiple accept="image/jpeg"><br><br>
	<input type="submit" value="Сохранить">
	
</form>
    </section>
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
</div>

