<?session_start();?>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style.css' />
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/function.js"></script>

<div class="cart-overlay">
    <div class="cart_mod">
        <div class="modal">
            <h1>Модальное окно</h1>
        </div>
    </div>
</div>

<h1>Интернет-магазин</h1>
<main>
    <nav>
<?
require_once('config.php');
//session_start();
if ($_SESSION == []){
    $_SESSION['autorization'] = 0;
    $_SESSION['id_buy'] = 0;
}
//print_r($_SESSION);
//echo "Session_id=".session_id();
$session = session_id();
$content = '';
?>
<a class="popup-open" href="#">Открыть popup</a>
<div class="popup-fade">
    <div class="popup">
        <a class="popup-close" href="#">Закрыть</a>
        <p>Всплывающие окна имеют широкий диапазон применений...</p>
    </div>        
</div>
<div class="cart" onclick="f_open_cart();cart()"><p>Корзина покупок</p></div>
<div class="cart" onclick="f_open_cart();cart()"><p>Корзина покупок</p></div>
<?   
if ($_GET['exit'] == "true") {
    $_GET = [];
    exit_users();
}
    if ($_SESSION['autorization'] == 1) {
        

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
<div class="cart_shop"></div>
<script>
/*function addGoods(){
    $(".cart_shop").append("<div>Покупка 1</div>");
}*/
/*function addGoods1(id,session,id_buy){
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
				
			}*/
    

</script>    
<script>
$(document).ready(function($) {
    $('.popup-open').click(function() {
        $('.popup-fade').fadeIn();
        cart();
        return false;
    });    
    
    $('.popup-close').click(function() {
        $(this).parents('.popup-fade').fadeOut();
        return false;
    });        

    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade').fadeOut();
        }
    });
    
    $('.popup-fade').click(function(e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();                    
        }
    });
});
</script>