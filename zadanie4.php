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

$arg1 = 65;
$arg2 = 21;
$operation = 'div';
function MathOperation($arg1,$arg2,$operation){
    switch ($operation){
        case 'sum':
            echo ('Операция сложения равна x + y ='.sum($arg1,$arg2).'</br>');
            break;
        case 'dif':
            echo ('Операция вычитания равна x - y ='.dif($arg1,$arg2).'</br>');
            break;
        case 'mult':
            echo ('Операция умножения равна x * y ='.mult($arg1,$arg2).'</br>');
            break;
        case 'div';
            echo ('Операция деления равна x / y ='.div($arg1,$arg2).'</br>');
            break;
        default:
            echo('Введена некорректная операция');
            break;
    }
}
MathOperation($arg1,$arg2,$operation);