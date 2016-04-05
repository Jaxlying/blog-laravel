/**
 * Created by yyljj on 16-4-5.
 */
/**
 * 计时
 */
function refreshLove() {
    var startTime = new Date();
    startTime.setFullYear(2016,3-1,6);
    startTime.setHours(17,27,0);
    var now = new Date();
    now.setMonth(now.getMonth());
    var minute = 60;
    var hour = 3600;
    var day = 24*3600;
    var month = 24*3600*30;
    var tollSeconds = (now.getTime()-startTime.getTime())/1000;
    var loveMonths = parseInt(tollSeconds/month);
    var loveDays = parseInt((tollSeconds-month*loveMonths)/day);
    var loveHours = parseInt((tollSeconds-loveMonths*month-loveDays*day)/hour);
    var loveMinutes = parseInt((tollSeconds-loveMonths*month-loveDays*day-loveHours*hour)/minute);
    var loveSeconds = parseInt(tollSeconds-loveMonths*month-loveDays*day-loveHours*hour-loveMinutes*minute);
    document.getElementById('love').innerHTML = "我们相爱了"+loveMonths+"个月"+loveDays+"天"+loveHours+"小时"+loveMinutes+"分钟"+loveSeconds+"秒";
    setTimeout("refreshLove()",1000);
    
}




