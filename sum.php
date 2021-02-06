<?php

// // 課題１
function sum($i){
      $result = $i*2;
      return $result;
}

    echo sum(4);

    

// // 課題２
function f($a,$b){
     $result = $a+$b;
     return $result;
}

    echo f(4,2);


// 課題３

function total($arr){
    $result = 1;
    
    foreach($arr as $ar){
    
    $result *= $ar;
    }
    echo $result;
}
    
    total(array(1,3,5,7,9));
    echo "\n";
    
    
// 課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    echo $max_number;
}
    max_array(array(3,6,4,7));
    echo "\n";
?>