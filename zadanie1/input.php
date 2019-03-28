<?
session_start();
?>
<script src="js/jquery.js"></script>
<script>
	function f(){
		var login = $("#login").val();
		var pass = $("#pass").val();
			pass = "qweRTyuI"+pass+login; 
		var str = "login="+login+"&pass="+pass;
		$.ajax({
			type: "POST",
			url: "server.php",
			data: str,
			success: function(answer){
				if (answer == 'true'){
				//console.log(answer);
				//$("div").html(answer);
				location.reload();
				}
				else
				$("div").html(answer);
			}
		});
		//

}

</script>
<?if ($_SESSION['autorization'] == 1){
	$new_url = 'index.php';
    header('Location: '.$new_url);
}?>
<div></div>
	<!--<form action="server.php" method="POST"></form>-->
	<p>Ваш логин</p>
	<input type="text" name="login" id="login" required placeholder="Введите логин">
	<p>Введите пароль</p>
	<input type="password" name="pass" id="pass" required placeholder="Введите пароль"><br><br>
	<!--<input type="submit" value="Войти">
	</form>-->
	<button onclick="f()">Войти</button>