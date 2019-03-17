<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<form method="POST">
<?
$form = '';
$form = '<input type="text" name="a" placeholder="Введите a" value="'.$_POST['a'].'" required>';
$form .='<input type="text" name="b" placeholder="Введите b" value="'.$_POST['b'].'" required>';
$form .='<input type="submit" name ="operat" value="+">';
$form .='<input type="submit" name ="operat" value="-">';
$form .='<input type="submit" name ="operat" value="*">';
$form .='<input type="submit" name ="operat" value="/">';
echo $form;
include('calculation.php');

?>

