<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>主页</title>
        <link rel="stylesheet" type="text/css" href="/AM/Public/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/AM/Public/css/funcs.css">
        <link rel="stylesheet" type="text/css" href="/AM/Public/css/ms/HomePage.css">
        <script type="text/javascript" src="/AM/Public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/AM/Public/js/funcs.js"></script>
        <script type="text/javascript" src="/AM/Public/js/ms/HomePage.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="navigationbar">
                <ul class="nav nav-tabs">
                <li role="presentation" class="active" id="sy"><a href="javascript:void(0)">首页</a></li>
                <?php if(I('cookie.type') == 1): ?><li role="presentation" id="gr"><a href="javascript:void(0)">个人信息管理</a></li>
                    <li role="presentation" id="dj"><a href="javascript:void(0)">登记空闲时间</a></li>
                    <li role="presentation" id="sx"><a href="javascript:void(0)">上下班登记</a></li>
                <?php else: ?>
                    <li role="presentation" id="gl"><a href="javascript:void(0)">管理助理</a></li>
                    <li role="presentation"id="js"><a href="javascript:void(0)">结算工时</a></li>
                    <li role="presentation" id="zl"><a href="javascript:void(0)">助理排班</a></li><?php endif; ?>
                <li role="presentation"><a href="javascript:void(0)">查看排班表</a></li>
                <li role="presentation"><a href="javascript:void(0)">退出</a></li>
                </ul>
            </div>
                <div id="system_p" class="jumbotron">
                    <h1>中山大学</h1>
                    <small>勤工俭学助理工作管理系统</small>
                </div>
        </div>
    </body>
</html>