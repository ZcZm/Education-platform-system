<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师添加课程</title>
	<link rel="stylesheet" href="/Grade_Serching_System/Public/css/teacher_add.css" />
</head>

<body class="all">
	<div class="A">
		<div class="link"><a href="/Grade_Serching_System/index.php/Admin/Index/logout">退出登录</a></div>
		<div class="link"><a href="/Grade_Serching_System/index.php/Admin/Teacher/index.html">返回</a></div>
	</div>
	<div class="B"></div>

	<form name="form1" method="post" action="/Grade_Serching_System/index.php/Admin/Teacher/add_do">
		<div class="title">编辑课程信息</div>
		<table cellspacing="0" class="table">
			<tr>
				<td class="td1">课程编号</td>
				<td class="td2"><input type="text" name="CouNo"></td>
				<td class="td1">课程名称</td>
				<td class="td2"><input type="text" name="CouName"></td>
			</tr>
			<tr>
				<td class="td1">老师工号</td>
				<td class="td2"><input type="text" name="TeaNo"></td>
				<td class="td1">老师名字</td>
				<td class="td2"><input type="text" name="TeaName"></td>
			</tr>
			<tr>
				<td class="td1">限定人数</td>
				<td class="td2"><input type="text" name="LimitNum"></td>
				<td class="td1">课程学分</td>
				<td class="td2"><input type="text" name="Credit"></td>
			</tr>
			<tr>
				<td class="td1">时间</td>
				<td class="td2"><input type="text" name="SchoolTime"></td>
				<td class="td1">地点</td>
				<td class="td2"><input type="text" name="Location"></td>
			</tr>
			<tr>
				<td class="td1">课时</td>
				<td class="td2"><input type="text" name="ClassHour"></td>
				<td class="td1">实验课时</td>
				<td class="td2"><input type="text" name="ExpHour"></td>
			</tr>
		</table>

		<div class="submit">
			<input type="submit" name="Submit" value="提交" class="button">
		</div>
	</form>

</body>
</html>