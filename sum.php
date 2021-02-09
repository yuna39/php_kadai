<?php

// // // 課題１
function sum($i){
      $result = $i*2;
      return $result;
}

    echo sum(8);
    echo "\n";

    

// // // // 課題２
function f($a,$b){
     $result = $a+$b;
     return $result;
}

    echo f(3,7);
    echo "\n";



// // // 課題３
function total($arr){
    $result = 1;
    
    foreach($arr as $ar){
    
    $result *= $ar;
    }
    return $result;
}
    
    echo total(array(1,2,5));
    echo "\n";
    
    
    
// // // 課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
    echo max_array(array(9,3,6,5,7));
    echo "\n";
    
    
    
// // 課題５

// // strip_tags・・・htmlタグを取り除く（<>の部分を除去）
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;


// // array_push・・・一つ以上の要素を配列の最後に追加する
$array = ["orange","peach"];
echo $array[0];
$arraylength = array_push($array,"apple");
echo $arraylength;


// array_merge・・・一つまたは複数の配列を結合
$array1 = [1,2];
$array2 = [11,22];
$array = array_merge($array1, $array2);
echo $array[2];


// // time,mktime・・・タイムスタンプを取得するためのメソッド
$time = mktime();
var_dump(date('y年m月d日h時i分s秒',$time));
print('<br/>');


// // date・・・日付の設定
date_default_timezone_set('Asia/Tokyo ');
echo '<p>', date('y年m月d日h時i分s秒'),'</p>';


?>

