<?php

workGen();

function workGen(){
    for ($i = 0;$i < 4;$i++){
        for ($j = 0;$j < 5;$j++){
            echo rand(0,20) . '&nbsp;' . substr(str_shuffle('+-*/'),0,1) . rand(0,20) . '&emsp;';
        }
        echo '<br>';
    }
}

