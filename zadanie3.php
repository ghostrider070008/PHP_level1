<?
function sum($x,$y){
    $z = $x + $y;
    return $z;
}
function dif($x,$y){
    $z = $x - $y;
    return $z;
}

function mult($x,$y){
    $z = $x * $y;
    return $z;
}

function div($x,$y){
    $z = $x / $y;
    return $z;
}

echo ('Операция сложения равна x + y ='.sum(25,5).'</br>');
echo ('Операция вычитания равна x - y ='.dif(19,10).'</br>');
echo ('Операция умножения равна x * y ='.mult(15,26).'</br>');
echo ('Операция деления равна x / y ='.div(125,5).'</br>');
