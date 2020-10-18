
<?php

if (!$_GET['zone']){
    echo "请输入时区缩写";
    return;
}elseif (!$_GET['format']){
    $_GET['format'] = "H:i:s";
}

echo dateFunc($_GET['zone'],$_GET['format']);


function dateFunc($zone,$str = "H:i:s"){
    $zone = strtoupper($zone);
    $timeZone = [
        "RPC" => "Asia/Shanghai",
        "USA" => "America/New_York",
        "UK" => "Europe/London",
        "DE" => "Europe/Berlin",
        "JP" => "Asia/Tokyo",
        "AUS" => "	Australia/Melbourne"
    ];

    if($timeZone[$zone]){
        date_default_timezone_set($timeZone[$zone]);
        return date($str);
    }
    die("抱歉，不支持你所输入的时区");
}

