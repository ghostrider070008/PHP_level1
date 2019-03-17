<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<form method="POST">
<input type="text" name="a" placeholder="Введите a">
<p><select size="1" name="oper" placeholder="Введите a">
    <option disabled>Выберите операцию</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select></p>
<input type="text" name="b" placeholder="Введите b">
<input type="submit" value="=">
<?
$a = $_POST['a'];
$content = $a;
$content .="<br>";
echo $content;
echo $_POST['oper'];
