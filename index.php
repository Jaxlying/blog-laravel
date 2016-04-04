<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title></title>
<!--    <script src="lib.js"></script>-->
</head>
<body onload="refresh()">
    <h1 id = 'test'></h1>
</body>

<script>
    function refresh(){
             var a = "<?php
            header("content-type:text/html;charset=utf-8");
            require_once 'lib.php';
            $love = new Love();
            $love->getLoveTime();
            ?>";
             document.getElementById('test').innerHTML = a;
            setTimeout(function () {
            refresh();
        },1000);
    }
</script>






