<?php
	session_start();
	include '../public/commen/config.php';
	header("Content-type: text/html; charset=utf-8"); 
	$file = $_FILES['myfile'];  //得到传输的数据,以数组的形式
	$name = $file['name'];      //得到文件名称，以数组的形式
	$upload_path = "../public/uploads/"; //上传文件的存放路径
	$basedir = dirname(__FILE__);
	echo $basedir;
	echo dirname($basedir);
	/*
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
   	 $type = strtolower(substr($item,strrpos($item,'.')+1));//得到文件类型，并且都转化成小写
    	if (move_uploaded_file($file['tmp_name'][$k],$upload_path.time().$name[$k])){
     	   //$str .= ','.$upload_path.time().$name[$k];
      	  echo 'success';
   	 }else{
     	   echo 'failed';
   	 }
	}*/
?>