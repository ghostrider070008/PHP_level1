<?
session_start();
require_once('../config.php');
$session = session_id();
//echo $session;
if ($id_buy == 0){
$sql = "SELECT * FROM cart INNER JOIN tovar ON (cart.id_goods=tovar.id) where session_id='$session';";
$res = mysqli_query($connect,$sql);
$cart_content = '';
$cart_content .= '<div onclick="f_close_cart()"><p>X</p></div>';
$cart_content .= '<h1>Корзина покупок</h1>';
$cart_content .= '<table>';
$counter = 1;
while ($data = mysqli_fetch_assoc($res)){
 $cart_content .= '<tr><td>'.$counter.'</td><td>'.$data['title'].'</td><td>'.$data['count'].'</td><td>'.$data['price'].'</td></tr>';
 $counter++;
}
$cart_content .= '</table>';
echo $cart_content;
}