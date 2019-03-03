<?
header('refresh: 2');
function return_time(){
    if ((date('G')==1) || (date('G')==21)){
        $time_ret = date('G').' час';
    }
    elseif ((date('G')>1 && date('G')<=4) || (date('G')>21 && date('G')<=24)){
        $time_ret = date('G').' часа';
    }
    elseif ((date('G')>=5 && date('G')<=20) || (date('G')==0)){
        $time_ret = date('G').' часов';
    }
    if ((date('i')==1) || (date('i')==21) || (date('i')==31) || (date('i')==41) || (date('i')==51)){
        $time_ret = $time_ret." ".date('i').' минута';
    }
    elseif ((date('i')>1 && date('i')<=4) || (date('i')>21 && date('i')<=24) || (date('i')>31 && date('i')<=34) || (date('i')>41 && date('i')<=44) || (date('i')>51 && date('i')<=54)){
        $time_ret = $time_ret." ".date('i').' минуты';
    }
    elseif ((date('i')>=5 && date('i')<=20) || (date('i')>=25 && date('i')<=30) ||(date('i')==0) || (date('i')>=35 && date('i')<=40) || (date('i')>=45 && date('i')<=50) || (date('i')>=55 && date('i')<=60)){
        $time_ret = $time_ret." ".date('i').' минут';
    }
 return $time_ret;
}
echo return_time();