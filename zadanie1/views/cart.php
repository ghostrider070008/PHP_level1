<?session_start();?>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style_cart.css' />
<script src="js/jquery.js"></script>
<h1>Корзина покупок</h1>
<?
require_once('../models/function.php');
$id = strip_tags($_POST['id']);
$session = session_id();
$id_buy = $_SESSION['id_users'];
print_r($_POST);
$_SESSION['session_id'] = session_id();
print_r($_SESSION);
if ($_SESSION['autorization'] == 0){
$id_buy = 0;
}
echo "<br>id=".$id;
echo "<br>session=".$session;
echo "<br>id_buy=".$id_buy;
addGoods_cart($id,$session,$id_buy);
//addGoods_cart(1,$session,0);

//deleteGoods_cart(1, 1);
//require_once('../config.php');
/*
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$clientip['client'] = $client;
$clientip['forward'] = $forward;
$clientip['remote'] = $remote;
foreach($clientip as $key=>$value)
    echo "$key => $value <br />";*/// как узнать ip адрес клиента
   // print_r($connect);

?>
