<?php
	session_start();
	include '../public/commen/config.php';
	header("Content-type: text/html; charset=utf-8"); 

	$username=$_POST['username'];
	$password=md5($_POST['password']);



	$sql="select * from user where username='{$username}' and password='{$password}'";
	$rst=mysql_query($sql);
	$row=mysql_fetch_assoc($rst);
	
	
	
	if($row){
		$_SESSION['home_username']=$username;
		$_SESSION['home_userid']=$row['id'];

		echo "<script>location='index.html'</script>";
	}else{
		echo "<script>alert('用户名或密码有误！')</script>";
		echo "<script>location='sign_in.php'</script>";
	}
?>