<?php
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
// 使用PHPMailer发送邮件实例，126邮箱
//Script by Code52.net
//代码吾爱，Be a happy coder.

include("class.phpmailer.php");
include("class.smtp.php"); // 可选

$toMail=$_GET['toMail'];
$captch_code='';
for($i=0;$i<6;$i++)
{
	$captch_code.=rand(0,9);
}
$_SESSION['pwd_code']=$captch_code;
$_SESSION['toMail']=$toMail;

$mail             = new PHPMailer();

$body             = $mail->getFile('test/contents.html');//邮件正文内容，提取html文件为其内容
//$body             = preg_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // 必填，SMTP服务器是否需要验证，true为需要，false为不需要
$mail->Host       = "smtp.sina.com";      //必填，设置SMTP服务器
$mail->Port       = 25;                   // 设置端口

$mail->Username   = "amyz666@sina.com";  // 必填，开通SMTP服务的邮箱；任意一个126邮箱均可
$mail->Password   = "a132105649356";            //必填， 以上邮箱对应的密码
$mial->CharSet = "UTF-8";
$mail->Encoding = "base64"; //编码方式
$mail->From       = "amyz666@sina.com";    //必填，发件人Email
$mail->FromName   = "aiyijuan";              //必填，发件人昵称或姓名
$mail->Subject    = "captch";       //必填，邮件标题（主题）
$mail->Body    = "This captch is $captch_code"; //可选，纯文本形势下用户看到的内容
$mail->WordWrap   = 50; // 自动换行的字数

//$mail->MsgHTML($body);

$mail->AddReplyTo("amyz666@sian.com","aiyijuan");//回复邮箱地址


//$mail->AddAttachment("/path/to/file.zip");             // 添加附件,注意路径
//$mail->AddAttachment("test/images/phpmailer.png", "new.png"); // 添加附件

$mail->AddAddress($toMail,"user");//收件人地址。参数一：收信人的邮箱地址，可添加多个。参数二：收件人称呼

//$mail->IsHTML(true); // 是否以HTML形式发送，如果不是，请删除此行

if(!$mail->Send()) {
  echo "Mailer错误: " . $mail->ErrorInfo;
} else {
  echo "<script>alert('验证码已成功发送至邮箱！')</script>";
  echo "<script>location='../modify_pwd.php'</script>";

}

?>