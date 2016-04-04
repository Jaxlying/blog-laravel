<?php
class Love{
    public function getLoveTime(){
        date_default_timezone_set('PRC');
        $loveStart = strtotime('2016-03-06 17:27:0');
        $nowTime = strtotime('now');
        $loveTollSeconds = $nowTime - $loveStart;
        $loveDays = (int)($loveTollSeconds/(24*3600));
        $loveHours = (int)($loveTollSeconds%(24*3600)/3600);
        $loveMinutes = (int)($loveTollSeconds%(24*3600)%3600/60);
        $loveSeconds = $loveTollSeconds%(24*3600)%3600%60;
        echo  $loveDays.'天'.$loveHours.'小时'.$loveMinutes.'分钟'.$loveSeconds.'秒';
    }
}