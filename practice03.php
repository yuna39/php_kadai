<?php

// 課題１
$name = "ゆな";

if($name == "ゆな") {
    echo "私はゆなです";
} else {
    echo "私はゆなではありません";
};

// 課題2
$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

// 課題３
$fruits = array("banana","peach","apple","orange","cherry");
foreach($fruits as $fruits) {
    echo "要素は" . $fruits;
    echo "\n";
}

// 課題４
$start = 1;
$end = 100;
for ($i = $start; $i < $end; $i++) {
    if($i % 5 ==0) {
        echo $i;
    }
}