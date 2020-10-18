<?php

$numArr = [];
for ($i=0;$i<10;$i++){
    array_push($numArr,mt_rand(99,999));
}
foreach ($numArr as $key => $item){
    echo "第". ($key+1) . "个随机数为：{$item}" . "<br />";
    echo "它的2次方根是" . pow($item,1/2) . "<br />";
    echo "它的7次方根是" . pow($item,1/7) . "<br />";
    echo "它的3/5次方是" . pow($item,0.6) . "<br />";
    echo "<br />";
}

