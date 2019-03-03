<?
function power($val,$pow){
    if ($pow==0) {
        return 1;
    }
    else {
        return $val*power($val,$pow-1);
    }
}
$val = 5;
$pow = 3;
echo ('Число '.$val.' в тепени '.$pow.' равно = '.power($val,$pow));