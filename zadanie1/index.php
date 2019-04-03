<?session_start();?>
<meta charset="utf-8">
<meta content="text/html">
<meta http-equiv="Content-Type">
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/function.js"></script>
<div class="cart-overlay">
    <div class="cart_mod">
        <div class="modal">
            
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
    $content .='<a href="input.php" class="registrat"><h2 class="registr_h2">Войти</h2></a>';
    $content .='<a href="views/registr.php" target="_self" class="registrat"><h2 class="registr_h2">Зарегистрироваться</h2></a>';
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