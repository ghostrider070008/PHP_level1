<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style.css' />
<?
session_start();
echo "Session_id=".session_id();
$content = '';
$content .= '<h1>Интернет-магазин</h1>';
$content .= '<main>';
$content .= '<nav>';
if ($_GET['exit'] == "true") {
    exit_users();
}
    if ($_SESSION['autorization'] == 1) {
        include('config.php');

   $content .='<div class="greeting"><p>Добро пожаловать '.$_SESSION['names'].'!</p> <a href="index.php?exit=true" >Выйти</a></div>';
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
    $_GET = [];
    $_SESSION = [];
    session_destroy();
}

?>