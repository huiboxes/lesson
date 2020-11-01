<?php

echoInfo();

function echoInfo(){
    $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $students = [];

    for ($i = 0; $i < 6; $i++){
        $arr = [];
        // 学号
        array_push($arr,rand(100000,999999));
        // 姓名
        array_push($arr,substr(str_shuffle($str),0,rand(4,8)));
        // 成绩
        for ($j = 0;$j < 5;$j++){
            array_push($arr,rand(60,100));
        }
        // 五门成绩
        $scores = array_slice($arr,2);
        // 总分
        array_push($arr,array_sum($scores));
        array_splice($arr,count($arr)-1,0,max($scores));
        // 放到 $student 数组中
        array_push($students,$arr);
    }
    foreach ($students as $value){
        echo '学号：' . $value[0] . '&emsp;';
        echo '姓名：' . $value[1] . '&emsp;';
        for ($i = 0;$i < 5;$i++){
            echo '成绩：' . ($i + 1) . '&emsp;';
        }
        echo '最高分：' . $value[count($value)-2] . '&emsp;';
        echo '总分：' . $value[count($value)-1] . '&emsp;';
        echo '<br>';
    }
}