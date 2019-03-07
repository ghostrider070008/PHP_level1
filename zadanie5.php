<?
$str = 'Самосвал въехал в гору';
function replace_string($string) {
    $converter = array(
        ' ' => '_'
    );
    return strtr($string, $converter);
}
echo replace_string($str);