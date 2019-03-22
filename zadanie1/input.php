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
				$("div").html(answer);
			}
		});

	}

</script>
<div></div>
	<p>Ваш логин</p>
	<input value="<?=$_SESSION['login']?>" type="text" id="login">
	<p>Введите пароль</p>
	<input value="<?=$_SESSION['pass']?>" type="password" id="pass"><br><br>
	<button onclick="f();">Войти</button>
