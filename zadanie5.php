<?
$str = 'Самосвал въехал в гору';
function transliterate($string) {
    $converter = array(
        ' ' => '_'
    );
    return strtr($string, $converter);
}
echo transliterate($str);