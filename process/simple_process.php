<?php

function mounth_date($n_mounth){
    $final_mount ='';
    switch ($n_mounth) {
        case '01':
            $final_mount ='ENE';
            break; 
        case '02':
            $final_mount ='FEB';
            break;
        case '03':
            $final_mount ='MAR';
            break;
        case '04':
            $final_mount ='ABR';
            break;
        case '05':
            $final_mount ='MAY';
            break;
        case '06':
            $final_mount ='JUN';
            break;
        case '07':
            $final_mount ='JUL';
            break;
        case '08':
            $final_mount ='AGO';
            break;
        case '09':
            $final_mount ='SEP';
            break;
        case '10':
            $final_mount ='OCT';
            break;
        case '11':
            $final_mount ='NOV';
            break;
        case '12':
            $final_mount ='DIC';
            break;
    }
    return $final_mount;
}

?>