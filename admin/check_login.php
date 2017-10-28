<?php
	session_start();
	include '../public/commen/config.php';
	header("Content-type: text/html; charset=utf-8"); 

	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	$sql="select * from user where email='{$email}' and password='{$password}' and isadmin=1";
	$rst=mysql_query($sql);
	$row=mysql_fetch_assoc($rst);

	if($row){
		$_SESSION['admin_username']=$row['username'];
		$_SESSION['admin_userid']=$row['id'];

		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('用户名或密码有误！')</script>";
		echo "<script>location='login.php'</script>";
	}
?>