<?
require_once('../config.php');
function addGoods_cart($id,$session){
    global $connect;
    $date = date('j-m-Y H:i:s');
    
    $sql = "INSERT INTO cart (id_buyers, id_goods, count, dates, session_id) VALUES (1, $id, 1, CURTIME(),'$session');";
    echo $sql;
    print_r($connect);
    $res = mysqli_query($connect,$sql);
    echo $res;
}
function deleteGoods_cart($id, $id_buy){
    global $connect;
    $sql = "DELETE FROM cart where id_goods=$id and id_buyers=$id_buy";
    echo $sql;
    print_r($connect);
    $res = mysqli_query($connect,$sql);
    echo $res;
}

