<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加老师信息</title>
    <link rel="stylesheet" href="/grade2/Public/css/manager_teaadd.css" />
</head>

<body class="all">
    <div class="A">
        <div class="link"><a href="/grade2/index.php/Admin/Index/logout">退出登录</a></div>
        <div class="link"><a href="<?php echo U('Manager/index');?>">返回</a></div>
    </div>
    <div class="B"></div>

    <form name="form1" method="post" action="<?php echo U('Admin/Manager/teaadd');?>">
        <div class="title">编辑老师信息</div>
        <table cellspacing="0" class="table">
            <tr>
                <td class="td1">工号</td>
                <td class="td2"><input type="text" name="TeaNo"></td>
                <td class="td1">姓名</td>
                <td class="td2"><input type="text" name="TeaName"></td>
            </tr>
            <tr>
                <td class="td1">班级编号</td>
                <td class="td2"><input type="text" name="ClassNo"></td>
                <td class="td1">班级名称</td>
                <td class="td2"><input type="text" name="ClassName"></td>
            </tr>
            <tr>
                <td class="td1">初始密码</td>
                <td class="td2"><input type="text" name="Pwd"></td>
                <td class="td1">性别</td>
                <td class="td2"><input type="text" name="Sex"></td>
            </tr>
            <tr>
                <td class="td1">简介</td>
                <td class="td2" colspan="3"><input type="text" name="Introduction" class="input"></td>
            </tr>
        </table>

        <div class="submit">
            <input type="submit" name="Submit" value="提交" class="button">
        </div>
    </form>

</body>
</html>