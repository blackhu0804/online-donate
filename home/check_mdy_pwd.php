<?php
	session_start();
	include '../public/commen/config.php';
	header("Content-type: text/html; charset=utf-8"); 
	$newPwd=md5($_POST['newPassword']);
	$email=$_SESSION['toMail'];

	if($_SESSION['pwd_code']==$_POST['identifyCode'])
	{
		if($_POST['newPassword']==$_POST['confirmPwd'])
		{
			$sql="update user set password='{$newPwd}' where email='{$email}'";

			if(mysql_query($sql)){
				echo '<script>location="index.php"</script>';
			}
			else
			{
				echo "<script>alert('数据库修改错误！')</script>";
 				echo "<script>location='modify_pwd.php'</script>";
			}
		}
		else
			{
				echo "<script>alert('密码输入错误！')</script>";
 				echo "<script>location='modify_pwd.php'</script>";
			}

	}
	else
	{
		echo "<script>alert('验证码输入错误！')</script>";
 		echo "<script>location='modify_pwd.php'</script>";

	}

?>