<?session_start();?>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/jquery.maskedinput.min.js"></script>
<div class="registration-overlay">
    <div class="registr">
        <form action="" method="POST">
        <fieldset>
            <legend>Форма регистрации</legend>
            <input type="text" id="login_input" name="login" required placeholder="Логин..." maxlength="30"><br>
            <input type="password" id="password_input1" name="pass" required placeholder="Пароль..."maxlength="20">
            <input type="password" id="password_input2" name="pass" required placeholder="Пароль еще раз..." maxlength="20"><br>
            <input type="text" id="firstname_in" name="firstname" required placeholder="Ваше имя..." >
            <input type="text" id="lname_in" name="lastname" required placeholder="Ваша фамилия..." ><br>
            <input type="email" id="email_in" name="email" required placeholder="Ваш e-mail..." >
            <input type="tel" id="tel" name="tel" placeholder="Ваш телефон..." maxlength="20"><br>
            <textarea id="adress" name="adress" placeholder="Ваш адрес..." ></textarea><br>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="agree" class="custom-control-input" id="customCheck">
              <label class="custom-control-label" for="customCheck">Нажимая кнопку, я принимаю условия <b>Пользовательского соглашения</b> и даю своё согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных».</label>
            </div>
            <button id="btn_home" onclick="window.location='../index.php'">Отмена</button>
            <input type="submit" class="btn_submit" value="Зарегистрироваться">

        </fieldset>
        </form>
    </div>
</div>
<script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#tel").mask("+7(999) 999-9999");
});
</script>