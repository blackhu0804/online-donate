<?php
	include '../public/commen/config.php';
	$name=$_POST['name'];
	$url=$_POST['url'];

	$basedir = dirname(__FILE__);
	$lbasedir= dirname($basedir);

	$src=$_FILES['img']['tmp_name'];
	$fname=$_FILES['img']['name'];

	$ext=explode('.', $fname);

	$ext=array_pop($ext);

	
	$dst=$lbasedir.'/public/uploads/'.time().mt_rand().'.'.$ext;
	if(move_uploaded_file($src,$dst)){

		$img=basename($dst);

		$sql="insert into advert(name,url,img) value('$name','$url','$img')";

		if(mysql_query($sql)){
			echo '<script>location="index.php"</script>';
		}else{
			echo "<script>alert('添加未成功，请重新修改！')</script>";
			echo '<script>location="index.php"</script>';
		}
	}
		





?>