<?
setlocale(LC_ALL, 'russian');
$letter = 'К';
$i = 0;
$obl = ['Московская Область' => ['Москва','Зеленоград','Клин'], 'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],'Рязанская область' => ['Рязань','Шацк','Шилово','Сасово','Касимов']];

/*Цикл вывод ассоативного массива*/
foreach ($obl as $key => $value){
    echo "$key:<br>";
    $i=0;
    $counter = count($value)-1;
    foreach($value as $val){
       $first_sim = mb_substr($val,0,1,'utf-8'); // обрезка строки на количество символов, Присваиваем переменной первую букву
       if ($first_sim == $letter){
        if ($i==$counter) {
            echo "$val";
            
            }
        else{
        echo "$val, ";
    }
}
    $i++;
    }
    echo "<br>";
}