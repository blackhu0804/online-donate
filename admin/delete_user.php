<?php
	include '../public/commen/config.php';
	$id=$_POST['user_id'];
	$sqldd="delete from user where id={$id}";
	if(mysql_query($sqldd)){
		echo '<script>location="index.php"</script>';
	}else{
		echo "<script>alert('用户删除失败！')</script>";
		echo "<script>location='index.php'</script>";
	}
?>