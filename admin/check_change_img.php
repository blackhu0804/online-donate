<?php
	include '../public/commen/config.php';
	$uid=$_POST['data-uid'];
	$name=$_POST['name'];
	$url=$_POST['url'];

	$basedir = dirname(__FILE__);
	$lbasedir= dirname($basedir);
	print_r($lbasedir);
	print_r($img);
	$src=$_FILES['img']['tmp_name'];
	$fname=$_FILES['img']['name'];

	$ext=explode('.', $fname);
	print_r($ext);
	$ext=array_pop($ext);
	print_r($ext);
	print_r($src);
	
	$dst=$lbasedir.'/public/uploads/'.time().mt_rand().'.'.$ext;
	if(move_uploaded_file($src,$dst)){

		$img=basename($dst);

		$sql="insert into advert(name,img,url) value('$name','$img','$url')";
		if(mysql_query($sql)){
			echo '<script>location="index.php"</script>';
		}else{
			echo "<script>alert('修改未成功，请重新修改！')</script>";
			echo '<script>location="index.php"</script>';
		}
	}
		





?>