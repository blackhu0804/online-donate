<?php
	session_start();
	include '../public/commen/config.php';
	include '../public/commen/function.php';

	if(isset($_REQUEST['authcode'])){
		
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$repassword=md5($_POST['passwordSure']);

		$reply = "";
  if ( isset($_POST["username"]) )
  {
    $email_address = $_POST["username"];
    $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
    if ( preg_match( $pattern, $email_address ) )
    {
      $reply = "您输入的电子邮件地址合法<br /><br />\n";
      $user_name = preg_replace( $pattern ,"$1", $email_address );
      $domain_name = preg_replace( $pattern ,"$2", $email_address );
      $reply .= "用户名：".$user_name."<br />\n";
      $reply .= "域名：".$domain_name."<br />\n\n";
    }
    else
    {
      $reply = "您输入的电子邮件地址不合法";
      cho "<script>alert($reply)</script>";
      echo "<script>location='sign_up.php'</script>";
      exit();
    }
  }

		if ($_REQUEST['authcode']==$_SESSION['authcode']) {
			
			if($password==$repassword){
					
				
					
				$sql="insert into user (username,password) value('{$username}','{$password}')";
				
				if(mysql_query($sql)){
					$_SESSION['home_username']=$username;
					$_SESSION['home_userid']=mysql_insert_id();
					echo "<script>location='index.html'</script>";
				}
			}else{
				echo "<script>location='sign_up.php'</script>";
			}
			
		}
		else{
			echo "<script>location='sign_up.php'</script>";
		}
		exit();
	}
?>


