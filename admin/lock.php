<?php
	session_start();
	header("Content-type: text/html; charset=utf-8");

	if(!$_SESSION['admin_userid']){
		echo "<script>alert('请先登录！')</script>";
		echo "<script>location='login.php'</script>";
		exit;
	}
?>