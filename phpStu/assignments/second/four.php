<?php

echo passGen();

function passGen(){
    $char = array_merge(range('A','Z'),range(0,9));
    $pwd = [];
    for ($i = 0;$i < 6;$i++){
        array_push($pwd,$char[rand(0,count($char)-1)]);
    }
    return implode($pwd);
}