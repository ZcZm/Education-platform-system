<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="__public__/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/Grade_Serching_System/Public/css/index.css" />
</head>

<body class="all">
    <div class="A">
        <div class="a"></div>
        <div class="a"></div>
        <div class="a">
            <div class="b"></div>
            <div class="b">
                <form action="/Grade_Serching_System/index.php/Admin/Index/checkLogin" method="post">
                    <div class="login">
                        <div class="title">
                            用 户 登 录
                        </div>
                        <div class="in">
                            账户：<input type="text" name="username" class="input"/>
                        </div>
                        <div class="in">
                            密码：<input type="password" name="password" value="" class="input" />
                        </div>
                    </div>

                    <div class="login">
                        <div class="select">
                            身份：
                           <!--  <select name="role" class="selec">
                                <option value="student">学生</option>
                                <option value="teacher">老师</option>
                                <option value="manager">管理员</option>
                            </select> -->
                            <input type="radio" name="role" value="student" checked="checked">学生
                            <input type="radio" name="role" value="teacher">老师
                            <input type="radio" name="role" value="manager">教务处
                        </div>
                        <div class="button">
                            <input type="submit" value="确定" name="ok" class="butto"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="b"></div>
        </div>
    </div>

</body>
</html>
<script type="text/javascript">

</script>