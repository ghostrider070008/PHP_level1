<?
$a =(float)$_POST['a'];
$b =(float)$_POST['b'];
$oper = $_POST['oper'];
$rezult = return_calc($_POST['oper'], $a, $b);
echo $rezult;



function return_calc($oper, $a, $b){

    switch ($oper){
        case '+':{
            return $a+$b;
            break;
        }
        case '-':{
            return $a-$b ;
            break;
        }
        case '*':{
            return $a*$b;
            break;
        }
        case '/':{
            if ($b!=0){
                return $a/$b;
            }
            else{
                echo 'На ноль делить нельзя';
                
            }
            break;
        }
        default:{
            break;
        }
    }
}
