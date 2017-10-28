<?php
	include 'lock.php';
	include '../public/commen/config.php';
	header("Content-type: text/html; charset=utf-8"); 
	$id=$_GET['class_id'];
	$time_num=$_GET['time_num'];
	$time=time();
	$end_time=$time+$time_num*24*3600;
	

	$sql="update giftclass set isend=1,start_time='{$time}',end_time='{$end_time}' where id={$id}";
	if(mysql_query($sql)){
		echo "<script>alert('审核成功！')</script>";
		echo '<script>location="index.php"</script>';
	}else{
		echo "<script>alert('审核未成功！')</script>";
		echo '<script>location="index.php"</script>';
	}
?>