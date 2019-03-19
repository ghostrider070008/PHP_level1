<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style.css' />
<main>
<h1>Отзывы</h1>
<form action='server.php' method="POST">
    <label for="name" class="for">Ваше имя:</label>
    <input type="text" required placeholder="Введите Ваше имя..." id="name" name="name_user"><br>
    <label for="otziv" class="for">Ваш отзыв:</label>
    <textarea type="textarea" required placeholder="Введите Ваш отзыв..." id="otziv" name="otziv_user"></textarea><br>
    <input type="image" src="img/otziv.png" id="submit_btn">
</form>
<div class="otziv_div">
<?include('otziv.php')?>
</div>
</main>