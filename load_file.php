<?
//echo $_POST['name'];
$i = 0;
include('config.php');
$path = "img/real/files/".$_FILES["photo"]["name"][$i];
if(!isset($_FILES["photo"]["tmp_name"])){
	$mas = scandir("files");
	foreach($mas as $file){
		echo $file."<br>";
	}
}
else{
	for($i=0;$i<count($_FILES["photo"]["name"]);$i++){
		$path = "img/real/files/".$_FILES["photo"]["name"][$i];
		if ($_FILES["photo"]["type"][$i] == 'image/jpeg'){ // Проверка на файл с изображением
			if (move_uploaded_file($_FILES["photo"]["tmp_name"][$i],$path)){ // Проверка на загрузку и загрузка файла
			echo $_FILES["photo"]["name"][$i]." успешно загружен!<br>";
			$sql = 'INSERT INTO foto (name_foto, url_foto, size, views) VALUES (\''.$_POST['name'].'\', \''.$path.'\', '.$_FILES["photo"]["size"][$i].', 0)';
			if(mysqli_query($connect,$sql)){
				echo "Данные успешно сохранены";
			}
		}
		}
		else
			echo "Выбранный файл ".$_FILES["photo"]["name"][$i]." не может быть загружен на сервер<br>";
	}
	}?>