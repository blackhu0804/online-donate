<?php
	include 'lock.php';
	include '../public/commen/config.php';
	$moneyNum=$_POST['moneyNum'];
	$class_id=$_GET['class_id'];
	$time=time();
	$user_id=$_SESSION['home_userid'];
	$content=$_POST['bless-content'];
	$sql="insert into giftInfo(giftClass_id,money,time,user_id,content) value('{$class_id}','{$moneyNum}','{$time}','{$user_id}','{$content}')";
	if(mysql_query($sql)){
		$sqlUser="select integration from user where id={$user_id}";//查询爱心积分
		$rstUser=mysql_query($sqlUser);
		$rowUser=mysql_fetch_assoc($rstUser);
		$integration=$rowUser['integration']+$moneyNum;

		$sqluser="update user set integration='{$integration}' where id={$user_id}";//更改爱心积分

		$sqlClass="select user_num,sum_money,use_money from giftClass where id={$class_id}";
		$rstClass=mysql_query($sqlClass);
		$rowClass=mysql_fetch_assoc($rstClass);
		$user_num=$rowClass['user_num']+1;
		$sum_money=$rowClass['sum_money']+$moneyNum;
		$use_money=$rowClass['use_money'];
		if($sum_money>=$use_money){
			$sqlclass="update giftClass set sum_money='{$sum_money}',user_num='{$user_num}',is_end=1 where id={$class_id}";
		}else{
			$sqlclass="update giftClass set sum_money='{$sum_money}',user_num='{$user_num}' where id={$class_id}";
		}

		if(!mysql_query($sqlclass)){
			echo "<script>alert('捐款失败，请重试！')</script>";
			echo '<script>location="pro_info.php"</script>';
		}

		$sqlHistory="select * from sum_history";
		$rstHistory=mysql_query($sqlHistory);
		$rowHistory=mysql_fetch_assoc($rstHistory);
		$h_sum_money=$rowHistory['sum_money']+$moneyNum;
		$h_sum_user=$rowHistory['sum_user']+1;
		$sqlhistory="update sum_history set sum_money='{$h_sum_money}',sum_user='{$h_sum_user}'";
		if(!mysql_query($sqlhistory)){
			echo "<script>alert('捐款失败，请重试！')</script>";
			echo '<script>location="pro_info.php"</script>';
		}

		if(mysql_query($sqluser)){
			echo "<script>alert('捐款成功，谢谢您的帮助！爱心积分增加$moneyNum')</script>";
			echo '<script>location="index.php"</script>';
		}
	}else{
		echo "<script>alert('捐款失败，请重试！')</script>";
		echo '<script>location="pro_info.php"</script>';
	}

?>