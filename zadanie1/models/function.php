<?session_start();
require_once('../config.php');
function addGoods_cart($id,$session,$id_buy){ // добавление товара в корзину на странице с товарами
    global $connect;
    $counts = 0;
   // echo $session;
   // echo "id_buy=".$id_buy;
    //$date = date('j-m-Y H:i:s'); //получение текущей даты
    if ($id_buy!==0){
    $sql = 'SELECT * FROM cart where id_goods='.$id.' and id_buyers='.$id_buy.';';
    //echo $sql;
    $res = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($res);
        if(mysqli_num_rows($res)==0){
            $counts = 1;
            $sql = "INSERT INTO cart (id_buyers, id_goods, count, dates) VALUES ($id_buy, $id, $counts, CURTIME());";
            $res = mysqli_query($connect,$sql);
        }
        elseif(mysqli_num_rows($res)>0){
            $counts = $data['count'];
            $counts++;
            $sql = "UPDATE cart SET count=$counts, dates=CURTIME()  WHERE id_goods=$id and id_buyers=$id_buy;";
            $res = mysqli_query($connect,$sql);
        }
    }
         else{
            $sql = "SELECT * FROM cart where id_goods=$id and session_id='$session';";
            $res = mysqli_query($connect,$sql);
            $data = mysqli_fetch_assoc($res);
            print_r($data);
            if(mysqli_num_rows($res)==0){
                $counts = 1;
                $sql = "INSERT INTO cart (session_id, id_buyers, id_goods, count, dates) VALUES ('$session', $id_buy,$id, $counts, CURTIME());";
                //echo $sql;
                $res = mysqli_query($connect,$sql);
            }
            elseif(mysqli_num_rows($res)>0){
                $counts = $data['count'];
                $counts++;
                //echo $counts;
                $sql = "UPDATE cart SET count=$counts, dates=CURTIME()  WHERE id_goods=$id and session_id='$session';";
                $res = mysqli_query($connect,$sql);
            }

         }

    }
   // $sql = "INSERT INTO cart (id_buyers, id_goods, count, dates, session_id) VALUES (1, $id, 1, CURTIME(),'$session');";
    //echo $sql;
    //print_r($connect);
    //$res = mysqli_query($connect,$sql);
    //echo $res;
function deleteGoods_cart($id, $id_buy){ // удаление товара из корзины
    global $connect;
    $sql = "DELETE FROM cart where id_goods=$id and id_buyers=$id_buy";
    echo $sql;
    print_r($connect);
    $res = mysqli_query($connect,$sql);
    echo $res;
}
function addGoods_cart_inc($id,$session,$id_buy){// увеливение количество товара на единицу
    global $connect;
    $counts = 0;
   // echo $session;
   // echo "id_buy=".$id_buy;
    //$date = date('j-m-Y H:i:s'); //получение текущей даты
    if ($id_buy!==0){
    $sql = 'SELECT * FROM cart where id_goods='.$id.' and id_buyers='.$id_buy.';';
    //echo $sql;
    $res = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($res);
        if(mysqli_num_rows($res)==0){
            $counts = 1;
            $sql = "INSERT INTO cart (id_buyers, id_goods, count, dates) VALUES ($id_buy, $id, $counts, CURTIME());";
            $res = mysqli_query($connect,$sql);
        }
        elseif(mysqli_num_rows($res)>0){
            $counts = $data['count'];
            $counts++;
            $sql = "UPDATE cart SET count=$counts, dates=CURTIME()  WHERE id_goods=$id and id_buyers=$id_buy;";
            $res = mysqli_query($connect,$sql);
        }
    }
         else{
            $sql = "SELECT * FROM cart where id_goods=$id and session_id='$session';";
            $res = mysqli_query($connect,$sql);
            $data = mysqli_fetch_assoc($res);
            print_r($data);
            if(mysqli_num_rows($res)==0){
                $counts = 1;
                $sql = "INSERT INTO cart (session_id, id_buyers, id_goods, count, dates) VALUES ('$session', $id_buy,$id, $counts, CURTIME());";
                //echo $sql;
                $res = mysqli_query($connect,$sql);
            }
            elseif(mysqli_num_rows($res)>0){
                $counts = $data['count'];
                $counts++;
                //echo $counts;
                $sql = "UPDATE cart SET count=$counts, dates=CURTIME()  WHERE id_goods=$id and session_id='$session';";
                $res = mysqli_query($connect,$sql);
            }

         }

    }
    function input_captcha(){
        global $a, $b;
        $a = rand(0,100);
        $b = rand(0,100);
        $rez = $a + $b;
        return $rez;
        //$content_captha = '<div class="div-captcha">'.$a.' + '.$b.' =?</div>';
        

    }
?>