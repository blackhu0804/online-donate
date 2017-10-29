<?php
	include 'lock.php';
	include '../public/commen/config.php';

	$id=$_POST['data-drop_id'];
	$sql="select img from advert where id={$id}";
	$rst=mysql_query($sql);
	$row=mysql_fetch_assoc($rst);
	$basedir = dirname(__FILE__);
	$lbasedir= dirname($basedir);

	$file="{$lbasedir}/public/uploads/{$row['img']}";
	
	$sqldd="delete from advert where id={$id}";

	if(mysql_query($sqldd)){
		//删除图片

		unlink($file);

		echo '<script>location="index.php"</script>';
	}
?>