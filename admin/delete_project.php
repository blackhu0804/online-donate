<?php
	include 'lock.php';
	header("Content-type: text/html; charset=utf-8"); 
	$id=$_POST['data-drop_project_id'];

	$sql="delete from giftclass where id={$id}";
	
	if(mysql_query($sql)){
		echo '<script>location="index.php"</script>';
	}else{
		echo "<script>alert('项目删除失败！')</script>";
		echo "<script>location='index.php'</script>";
	}
?>