<?session_start();?>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<script src="../js/jquery-3.3.1.min.js"></script>
<div class="registration-overlay">
    <div class="registr">
        <form action="" method="POST">
        <fieldset>
            <legend>Форма регистрации</legend>
            <input type="text" name="login" required placeholder="Введите логин..." ><br>
            <input type="password" name="pass" required placeholder="Введите пароль..."><br>
            <input type="text" name="firstname" required placeholder="Ваше имя..." ><br>
            <input type="text" name="lastname" required placeholder="Ваша фамилия..." ><br>
            <input type="email" name="email" required placeholder="Ваш e-mail..." ><br>
            <input type="tel" name="tel" required placeholder="Ваш телефон..." ><br>
            <textarea name="adress" required placeholder="Ваш адрес..." ></textarea><br>

        </fieldset>
        </form>
    </div>
</div>