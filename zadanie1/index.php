<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<form method="POST">
<?
$form = '';
$form = '<input type="text" name="a" placeholder="Введите a" value="'.$_POST['a'].'" required>';
$form .= '<select size="1" name="oper" style="width:130px">';

$form .='<option disabled selected="selected" required>Выберите операцию</option>';
$operation = $_POST['oper'];
    switch ($operation){
        case '+':{
            $form .='<option selected="selected" value="+">+</option>';
            $form .='<option value="-">-</option>';
            $form .='<option value="*">*</option>';
            $form .='<option value="/">/</option>';
            break;
        }
        case '-':{
            $form .='<option selected="selected" value="-">-</option>';
            $form .='<option value="+">+</option>';
            $form .='<option value="*">*</option>';
            $form .='<option value="/">/</option>';
            break;
        }
        case '*':{
            $form .='<option selected="selected" value="*">*</option>';
            $form .='<option value="+">+</option>';
            $form .='<option value="-">-</option>';
            $form .='<option value="/">/</option>';
            break;
        }
        case '/':{
            $form .='<option selected="selected" value="/">/</option>';
            $form .='<option value="+">+</option>';
            $form .='<option value="-">-</option>';
            $form .='<option value="*">*</option>';
            break;
        }
        default:{
            $form .='<option value="+">+</option>';
            $form .='<option value="-">-</option>';
            $form .='<option value="*">*</option>';
            $form .='<option value="/">/</option>';
            break;
        }
    }
$form .='</select>';
$form .='<input type="text" name="b" placeholder="Введите b" value="'.$_POST['b'].'" required>';
$form .='<input type="submit" name ="operat" value="=">';
echo $form;
include('calculation.php');

?>

