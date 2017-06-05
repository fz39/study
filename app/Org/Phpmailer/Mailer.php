<?php
namespace App\Org\Phpmailer;

class Mailer{
    
    public function test($data){
        require_once ('./PHPMailerAutoload.php');
        $mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP();               // 使用SMTP服务         // Set mailer to use SMTP
        $mail->Host = 'smtp.163.com';  // 发送方的SMTP服务器地址 // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '18600661647@163.com';    // 发送方的163邮箱用户名 // SMTP username
        $mail->Password = 'wei123456';          // 发送方的邮箱密码，注意用163邮箱这里填写的是“客户端授权密码”而不是邮箱的登录密码！                 // SMTP password
        $mail->SMTPSecure = 'ssl';     // 使用ssl协议方式       // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 994;             // 163邮箱的ssl协议方式端口号是465/994    // TCP port to connect to
        $mail->CharSet = "utf8";       // 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->SMTPAuth = true;        // 是否使用身份验证

        $mail->setFrom($data['user_name'], 'myafa');       // 设置发件人信息，如邮件格式说明中的发件人，这里会显示为Mailer(xxxx@163.com），Mailer是当做名字显示
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = '验证码';// 邮件标题
        $mail->Body    = $data['code'];// 邮件正文
        if(!$mail->send()) { // 发送邮件
            return true;
        } else {
            return false;
        }
    }
 
}
