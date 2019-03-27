<?session_start();?>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<link rel='stylesheet' href='css/style_cart.css' />
<script src="js/jquery.js"></script>
<h1>Корзина покупок</h1>
<?
require_once('../models/function.php');
$id = 3;
$session = session_id();
addGoods_cart($id,$session);
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
