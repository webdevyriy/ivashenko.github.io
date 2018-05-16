<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$subject = $_POST['user_subject'];
$message = $_POST['user_message'];
//$mail->SMTPDebug = 3; // Enable verbose debug output
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru'; // Specify main and backup SMTP serv
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'zacaz2018@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'lol6300'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->setFrom('zacaz2018@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('yurii.ivashchenko.web@gmail.com'); // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com'); // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Заявка с тестового сайта';
$mail->Body = '' .$name . ' оставил заявку, его телефон ' .$subject. '<br>Почта этого пользователя: ' .$message. '<br>Тема : ' .$email;
$mail->AltBody = '';
if(!$mail->send()) {
 echo 'Error';
} else {
 header('location: index.html');
}
?>
