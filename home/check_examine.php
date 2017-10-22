<?php
	include 'lock.php';
	include '../public/commen/config.php';
	include '../public/commen/function.php';


	$name=$_POST['name'];
	$ID_card=$_POST['idNumber'];
	$bank_ID=$_POST['cardNumber'];
	$myPhone=$_POST['phoneNumber'];
	$location=$_POST['location'];
	$user_ID=$_SESSION['home_userid'];
	


	if(!(isChineseName($name)))
	{
		echo "<script>alert('请输入格式规范的姓名！')</script>";
	    echo "<script>location='examine.php'</script>";
	}

	if(!(is_idcard($ID_card)))
	{
		echo "<script>alert('请输入格式正确的身份证号！')</script>";
	    echo "<script>location='examine.php'</script>";
	}

	if(!(luhn($bank_ID)))
	{

		echo "<script>alert('请输入格式正确的银行卡号！')</script>";
	    echo "<script>location='examine.php'</script>";
	}

	if(!(preg_match("/^1[34578]\d{9}$/", $myPhone)))
	{
		echo "<script>alert('请输入格式正确的手机号！')</script>";
	    echo "<script>location='examine.php'</script>";

	}
	$sqlCheck="select * from certification where user_ID='{$user_ID}'";
	$rstCheck=mysql_query($sqlCheck);
	$rowCheck=mysql_fetch_assoc($rstCheck);
	if($rowCheck)
	{
		$sql="update certification set name='{$name}',ID_card='{$ID_card}',myPhone='{$myPhone}',bank_ID='{$bank_ID}',location='{$location}' where user_ID={$user_ID}";
		if(mysql_query($sql)){
		echo "<script>alert('个人认证信息已更新提交，请等待审核')</script>";
		echo "<script>location='index.php'</script>";
	}
	}
	else
	$sql="insert into certification (name,ID_card,bank_ID,myPhone,location,user_ID) value('{$name}','{$ID_card}','{$bank_ID}','{$myPhone}','{$location}','{$user_ID}')";

	if(mysql_query($sql)){
		echo "<script>alert('个人认证信息已提交，请等待审核')</script>";
		echo "<script>location='index.php'</script>";
	}

?>