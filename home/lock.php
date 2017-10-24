<?php
	session_start();
	error_reporting(E_ALL||~E_NOTICE);
	header("Content-type: text/html; charset=utf-8"); 
	if(!$_SESSION['home_userid']){
		echo "<script>alert('请先登录！')</script>";
		echo "<script>location='sign_in.php'</script>";
		exit();
	}
?>