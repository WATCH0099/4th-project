<?php
function max_array($arr){
    $result = 1;
    foreach ($arr as $array){
        $result *= $array;
    }
    return $result;
}
echo max_array(array(1,3,5,7,9));