<?
session_start();
require_once('../config.php');
$session = session_id();
//echo $session;
//print_r($_SESSION);
$id_buy =$_SESSION['id_buy'];
//echo "id_buyers=".$id_buy; 
if ($id_buy == 0){
$sql = "SELECT * FROM cart INNER JOIN tovar ON (cart.id_goods=tovar.id) where session_id='$session';";
$res = mysqli_query($connect,$sql);
$cart_content = '';
//$cart_content = '<div class="modal">';
$cart_content .= '<div class="modal-close" onclick="f_close_cart()"><p>X</p></div>';
$cart_content .= '<h1>Корзина покупок</h1>';
    if (mysqli_num_rows($res)==0){
    $cart_content .= '<div><p>Ваша карзина пуста</p></div>';
    }
    else{
$cart_content .= '<table>';
$counter = 1;
$total = 0;
$cart_content .= '<tr><td><b>№ п/п</b></td><td><b>Наименование товара</b></td><td class="td-count"><p class="count"><b>Количество</b></p></td><td><b>Цена</b></td><td><b>Итого</b></td></tr>';
while ($data = mysqli_fetch_assoc($res)){
    $data['total_price'] = $data['count']*$data['price'];
    $total = $total + $data['total_price'];
 $cart_content .= '<tr><td>'.$counter.'</td><td>'.$data['title'].'</td><td class="td-count"><button class="btn-count-add" onclick="addGoodsCartInc('.$data['id'].')">+</button><p class="count">'.$data['count'].'</p><button class="btn-count-dec">-</button></td><td>'.$data['price'].'</td><td>'.$data['total_price'].'</td></tr>';
 $counter++;
}
$cart_content .= '<tr><td colspan="3"><b>Итого:<b></td><td colspan="2"><b>'.$total.'</b></td></tr>';
$cart_content .= '</table>';
}
}
else{
    $sql = "SELECT * FROM cart INNER JOIN tovar ON (cart.id_goods=tovar.id) where id_buyers='$id_buy';";
    $res = mysqli_query($connect,$sql);
    $cart_content = '';
    $cart_content .= '<div onclick="f_close_cart()"><p>X</p></div>';
    $cart_content .= '<h1>Корзина покупок</h1>';
    if (mysqli_num_rows($res)==0){
    $cart_content .= '<div><p>Ваша карзина пуста</p></div>';
    }
    else{
$cart_content .= '<table>';
$counter = 1;
while ($data = mysqli_fetch_assoc($res)){
 $cart_content .= '<tr><td>'.$counter.'</td><td>'.$data['title'].'</td><td>'.$data['count'].'</td><td>'.$data['price'].'</td></tr>';
 $counter++;
}
$cart_content .= '</table></div>';
}
};
echo $cart_content;