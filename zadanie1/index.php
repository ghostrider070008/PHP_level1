<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style.css' />
<?
//print_r($_SESSION);
$content = '';
$content .= '<h1>Интернет-магазин</h1>';
$content .= '<main>';
$content .= '<nav>';
    
    if ($_SESSION['autorization'] == 1) {
   $content .='<div class="greeting">Добро пожаловать'.$_SESSION['login'].'</div>';
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
