<?session_start();?>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style.css' />
<script src="js/jquery.js"></script>
<?
//session_start();
echo "Session_id=".session_id();
$session = session_id();
$content = '';
$content .= '<h1>Интернет-магазин</h1>';
$content .= '<main>';
$content .= '<nav>';
?>
<div class="cart"><a href=""><p>Корзина покупок</p></a></div>
<?   
if ($_GET['exit'] == "true") {
    $_GET = [];
    exit_users();
}
    if ($_SESSION['autorization'] == 1) {
        include('config.php');

   $content .='<div class="greeting"><p>Добро пожаловать '.$_SESSION['names'].'!</p> <a href="index.php?exit=true">Выйти</a></div>';
    }
    else {    
    $content .='<a href="input.php" class="registr"><h2 class="registr_h2">Войти</h2></a>';
    $content .='<h2 class="registr_h2">или</h2>';
    $content .='<a href="" class="registr"><h2 class="registr_h2">Зарегистрироваться</h2></a>';
    }
    echo $content;?>
</nav>
<div class="clear">
</div>
    <section>

<?include('tovar.php')?>
    <div class="clear"></div>      
    

    </section>
    
</main>
<? 
function exit_users(){
    $_SESSION = [];
    session_destroy();
}

?>
<?
print_r($data);
$content2 = '<div class="cart_shop" onclick="addGoods1('.$data['id'].','.$session.','.$_SESSION['id_users'].')"><p>Корзина покупок</p></div>';
echo $content2;
?>
<script>
function addGoods(){
    $(".cart_shop").append("<div>Покупка 1</div>");
}
function addGoods1(id,session,id_buy){
        var 
		var login = $("#login").val();
		var pass = $("#pass").val();
			pass = "qweRTyuI"+pass+login; 
		var str = "id="+id+"&session="+session+"&id_buy";
		$.ajax({
			type: "POST",
			url: "cart.php",
			data: str,
			success: function(){
				
			}

</script>    