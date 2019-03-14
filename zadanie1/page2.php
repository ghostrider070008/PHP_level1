<link rel='stylesheet' href='css/style.css' />
<script src='js/jquery.js'></script>

<main>
    <section class="section_foto">
    
    <?
    include('config.php');
    $id = $_GET['id'];
    $sql = "select * from foto where id=$id";
    $res = mysqli_query($connect,$sql);
    //var_dump($res);
    $data = mysqli_fetch_assoc($res);
    $foto .= '';
    $foto .= '<img class="image" src="'.$data['url_foto'].'" alt="'.$data['name_foto'].'">';
    $foto .= '<div class="cleardiv"></div><p>Просмотры: '.$data['views'].'</p>';
    echo $foto;
    ?>
    </section>
</main>
