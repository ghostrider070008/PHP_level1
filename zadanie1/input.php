<?
session_start();
?>
<script src="js/jquery.js"></script>
<script>
	function f(){
		var login = $("#login").val();
		var pass = $("#pass").val();
		if (login == ''){
			$.ajax({
			success: function(){
				$("#login").html('Заполните это поле');
			}
		})
		}
		else{
			pass = "qweRTyuI"+pass+login;
			console.log(pass);  
		var str = "login="+login+"&pass="+pass;
		console.log(str);
		
		$.ajax({
			type: "POST",
			url: "server.php",
			data: str,
			success: function(answer){
				$("div").html(answer);
			}
		});

	}
}

</script>
<?if ($_SESSION['autorization'] == -1){
$correct = "Неправильный логин или пароль! Повторите снова!";
}?>
<div><?echo $correct?></div>

	<form onsubmit="f();" action="server.php" method="POST">
	<p>Ваш логин</p>
	<input type="text" name="login" id="login" required placeholder="Введите логин">
	<p>Введите пароль</p>
	<input type="password" name="pass" id="pass" required placeholder="Введите пароль"><br><br>
	<input type="submit" value="Войти">
	</form>
