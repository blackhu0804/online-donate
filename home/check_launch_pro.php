<?php
	include 'lock.php';
	include '../public/commen/config.php';
	include '../public/commen/function.php';
	header("Content-type: text/html; charset=utf-8"); 
	$basedir = dirname(__FILE__);
	$lbasedir= dirname($basedir);
	$file = $_FILES['myfile'];  //得到传输的数据,以数组的形式
	$name = $file['name'];      //得到文件名称，以数组的形式
	$upload_path = $lbasedir."/public/uploads/"; //上传文件的存放路径
	$time=time();
	$proName=$_POST['proName'];
	$proMoney=$_POST['proMoney'];
	$proReason=$_POST['proReason'];
	$proDays=$_POST['proDays'];
	$time_num=$proDays*3600*24+$time;
	$user_id=$_SESSION['home_userid'];
	$summary=$_POST['summary'];

	

	
	foreach ($name as $k=>$names){
    	$type = strtolower(substr($names,strrpos($names,'.')+1));//得到文件类型，并且都转化成小写
    	$allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
    	//把非法格式的图片去除
    	if (!in_array($type,$allow_type)){
      	  unset($name[$k]);
    	}
	}
	$str = '';
	
	foreach ($name as $k=>$item){
   	// $type = strtolower(substr($item,strrpos($item,'.')+1));//得到文件类型，并且都转化成小写


		$temName=time().$name[$k];
		$dst=$upload_path.$temName;
		$str=$str.",".$temName;
    	if (move_uploaded_file($file['tmp_name'][$k],$dst)){
    		ImageUpdateSize($dst,320,320);
    		ImageUpdateSize($dst,500,500,n_);  

   	 	}
	}
	$str=substr($str,1);

	$sql="insert into giftClass(name,img,expl,use_money,start_time,time_num,user_id,summary) value('$proName','$str','$proReason','$proMoney','$time','$time_num','$user_id','$summary')";
		$rst=mysql_query($sql);
	
		if($rst){
		echo "<script>alert('提交成功，请等待审核！')</script>";
		echo '<script>location="index.php"</script>';
	}else{
		
		echo "<script>alert('提交未成功，请重新填写！')</script>";
		echo '<script>location="launch_pro.php"</script>';

	}


	
	
/*
		$sql="insert into advert(pos,url,img) value('$pos','$url','$img')";
		if(mysql_query($sql)){
			echo '<script>location="index.php"</script>';
		}*/
	
?>