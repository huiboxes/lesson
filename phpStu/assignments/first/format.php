<?php
$str = trim($_GET['str']);
if (!$str){
    echo "请输入字符串";
    return;
}
echo format($str);


function format($string){
    $words = 1;
    for ($i=0;$i<strlen($string);$i++){
        if (preg_match("/\s/",$string[$i])){
            $string[$i+1] = strtoupper($string[$i+1]);
            $words++;
        }
        }
    $string = strtoupper($string[0]) . substr($string,1);
    return json_encode(["str"=>$string,"count"=>$words]);
}