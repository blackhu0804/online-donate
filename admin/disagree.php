<?php
	include 'lock.php';
	include '../public/commen/config.php';
	header("Content-type: text/html; charset=utf-8"); 
	$id=$_GET['class_id'];

	

	$sql="update giftclass set isend=2 where id={$id}";
	if(mysql_query($sql)){
		echo "<script>alert('已经成功打回改项目！')</script>";
		echo '<script>location="index.php"</script>';
	}else{
		echo "<script>alert('打回该项目失败！')</script>";
		echo '<script>location="index.php"</script>';
	}
?>