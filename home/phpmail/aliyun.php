<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
// ʹ��PHPMailer�����ʼ�ʵ����126����
//Script by Code52.net
//�����ᰮ��Be a happy coder.

include("class.phpmailer.php");
include("class.smtp.php"); // ��ѡ

$toMail=$_GET['toMail'];


$mail             = new PHPMailer();

$body             = $mail->getFile('test/contents.html');//�ʼ��������ݣ���ȡhtml�ļ�Ϊ������
//$body             = preg_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // ���SMTP�������Ƿ���Ҫ��֤��trueΪ��Ҫ��falseΪ����Ҫ
$mail->Host       = "smtp.aliyun.com";      //�������SMTP������
//$mail->Port       = 25;                   // ���ö˿�

$mail->Username   = "amyz666@aliyun.com";  // �����ͨSMTP��������䣻����һ��126�������
$mail->Password   = "a132105649356";            //��� ���������Ӧ������

$mail->From       = "amyz666@aliyun.com";    //���������Email
$mail->FromName   = "Webmaster";              //����������ǳƻ�����
$mail->Subject    = "This is the subject";       //����ʼ����⣨���⣩
$mail->AltBody    = "This is the body when user views in plain text format"; //��ѡ�����ı��������û�����������
$mail->WordWrap   = 50; // �Զ����е�����

$mail->MsgHTML($body);

$mail->AddReplyTo("amyz666@aliyun.com","Webmaster");//�ظ������ַ


//$mail->AddAttachment("/path/to/file.zip");             // ��Ӹ���,ע��·��
//$mail->AddAttachment("test/images/phpmailer.png", "new.png"); // ��Ӹ���

$mail->AddAddress($toMail,"First Last");//�ռ��˵�ַ������һ�������˵������ַ������Ӷ�������������ռ��˳ƺ�

$mail->IsHTML(true); // �Ƿ���HTML��ʽ���ͣ�������ǣ���ɾ������

if(!$mail->Send()) {
  echo "Mailer����: " . $mail->ErrorInfo;
} else {
  echo "<script>alert('��֤���ѳɹ����������䣡')</script>";
  echo "<script>location='../sign_in.php'</script>";

}

?>