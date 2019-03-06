
<?

$mas = ['a'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh','з'=>'z','и'=>'i','й'=>'j','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ь'=>'\'','ы'=>'y','ъ'=>'"','э'=>'eh','ю'=>'yu','я'=>'ya'];
$stroka = "самосвал";

$i = 1;
mb_convert_encoding($stroka,"","UTF-8");
echo $mas;
$counter = mb_strlen($stroka);// функция подсчета количества символов в строке (кирилические символы)
foreach ($mas as $key){
    echo $key;
    
}
echo $stroka[$i];
for ($i=0;$i<$counter;$i++){
    $stroka_translit .= $mas[$stroka[$i]];
    echo 1;

}

echo "<br> $counter";
echo "<br> $stroka_translit";