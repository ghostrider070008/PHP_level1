<?
session_start();
require_once('../models/function.php');
$id = strip_tags($_POST['id']);
$session = session_id();
$id_buy = $_SESSION['id_users'];
$_SESSION['session_id'] = session_id();
if ($_SESSION['autorization'] == 0){
$id_buy = 0;
}
addGoods_cart($id,$session,$id_buy);
?>