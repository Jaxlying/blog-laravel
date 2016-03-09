<?php
header("content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
$love_star = strtotime('2016-3-6 17:27:0');
$now_time = strtotime('now');
function get_lovetime($love_star,$now_time)
{
    $love_seconds = $now_time-$love_star;
    $love_day = (int)($love_seconds/(24*3600));
    $love_hour = (int)($love_seconds%(24*3600)/3600);
    $love_minute = (int)($love_seconds%(24*3600)%3600/60);
    $love_second = $love_seconds%(24*3600)%3600%60;
    return (string)($love_day).'日'.(string)($love_hour).'小时'
        .(string)($love_minute).'分钟'.(string)($love_second).'秒';
}
$love_time = get_lovetime($love_star,$now_time);
echo '我们已经相爱了'.$love_time;





