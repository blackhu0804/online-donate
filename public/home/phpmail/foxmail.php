<?php

// ʹ��PHPMailer�����ʼ�ʵ����foxmail����
//Script by Code52.net
//�����ᰮ��Be a happy coder.

include("class.phpmailer.php");
include("class.smtp.php"); // ��ѡ

$mail             = new PHPMailer();

$body             = $mail->getFile('test/contents.html');//�ʼ��������ݣ���ȡhtml�ļ�Ϊ������
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // ���SMTP�������Ƿ���Ҫ��֤��trueΪ��Ҫ��falseΪ����Ҫ
$mail->Host       = "smtp.foxmail.com";      //�������SMTP������
//$mail->Port       = 25;                   // ���ö˿�

$mail->Username   = "username@foxmail.com";  // �����ͨSMTP��������䣻����һ��foxmail�������
$mail->Password   = "password";            //��� ���������Ӧ������

$mail->From       = "username@foxmail.com";    //���������Email
$mail->FromName   = "Webmaster";              //����������ǳƻ�����
$mail->Subject    = "This is the subject";       //����ʼ����⣨���⣩
$mail->AltBody    = "This is the body when user views in plain text format"; //��ѡ�����ı��������û�����������
$mail->WordWrap   = 50; // �Զ����е�����

$mail->MsgHTML($body);

$mail->AddReplyTo("username@foxmail.com","Webmaster");//�ظ������ַ


$mail->AddAttachment("/path/to/file.zip");             // ��Ӹ���,ע��·��
$mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // ��Ӹ���

$mail->AddAddress("MailTO@gmail.com","First Last");//�ռ��˵�ַ������һ�������˵������ַ������Ӷ�������������ռ��˳ƺ�

$mail->IsHTML(true); // �Ƿ���HTML��ʽ���ͣ�������ǣ���ɾ������

if(!$mail->Send()) {
  echo "Mailer����: " . $mail->ErrorInfo;
} else {
  echo "�ʼ����ͳɹ�";
}

?>