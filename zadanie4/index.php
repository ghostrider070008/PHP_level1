<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style.css' />
<?include('tovar.php')?>
<h1>Интернет-магазин</h1>
<main>
    <section>
        


<?
$tovar = '';

while ($data = mysqli_fetch_assoc($res)){
    $tovar .= '<div class="tovar">';
    $tovar .= '<h2>'.$data['title'].'</h2>';
    $tovar .= '<img src="img/catalog/'.$data['img'].'" alt="Здесь было фото">';
    $tovar .= '<p>'.$data['info'].'</p>';
    $tovar .= '<p class="p_2">'.$data['price'].'</p>';
    $tovar .= '<a href="#">Купить</a></div>';
    }
    echo $tovar;
    ?>
    <div class="clear"></div>      
    

    </section>
</main>