<?php
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
// ʹ��PHPMailer�����ʼ�ʵ����126����
//Script by Code52.net
//�����ᰮ��Be a happy coder.

include("class.phpmailer.php");
include("class.smtp.php"); // ��ѡ

$toMail=$_GET['toMail'];
$captch_code='';
for($i=0;$i<6;$i++)
{
	$captch_code.=rand(0,9);
}
$_SESSION['pwd_code']=$captch_code;
$_SESSION['toMail']=$toMail;

$mail             = new PHPMailer();

$body             = $mail->getFile('test/contents.html');//�ʼ��������ݣ���ȡhtml�ļ�Ϊ������
//$body             = preg_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // ���SMTP�������Ƿ���Ҫ��֤��trueΪ��Ҫ��falseΪ����Ҫ
$mail->Host       = "smtp.sina.com";      //�������SMTP������
$mail->Port       = 25;                   // ���ö˿�

$mail->Username   = "amyz666@sina.com";  // �����ͨSMTP��������䣻����һ��126�������
$mail->Password   = "a132105649356";            //��� ���������Ӧ������
$mial->CharSet = "UTF-8";
$mail->Encoding = "base64"; //���뷽ʽ
$mail->From       = "amyz666@sina.com";    //���������Email
$mail->FromName   = "aiyijuan";              //����������ǳƻ�����
$mail->Subject    = "captch";       //����ʼ����⣨���⣩
$mail->Body    = "This captch is $captch_code"; //��ѡ�����ı��������û�����������
$mail->WordWrap   = 50; // �Զ����е�����

//$mail->MsgHTML($body);

$mail->AddReplyTo("amyz666@sian.com","aiyijuan");//�ظ������ַ


//$mail->AddAttachment("/path/to/file.zip");             // ��Ӹ���,ע��·��
//$mail->AddAttachment("test/images/phpmailer.png", "new.png"); // ��Ӹ���

$mail->AddAddress($toMail,"user");//�ռ��˵�ַ������һ�������˵������ַ������Ӷ�������������ռ��˳ƺ�

//$mail->IsHTML(true); // �Ƿ���HTML��ʽ���ͣ�������ǣ���ɾ������

if(!$mail->Send()) {
  echo "Mailer����: " . $mail->ErrorInfo;
} else {
  echo "<script>alert('��֤���ѳɹ����������䣡')</script>";
  echo "<script>location='../modify_pwd.php'</script>";

}

?>