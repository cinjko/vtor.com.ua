<?php

namespace common\widgets;
require( __DIR__.'/../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
use yii\base\Widget;
use Yii;

class MailWidget extends Widget
{
    public $email;
    public $text;
    public $client_email;
    public $subject;

    public function run()
    {
        $mail = new \PHPMailer;
        $mail->SMTPDebug = 3;
        $mail->Host = 'smtp.ukr.net';
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'cinjko89@ukr.net';                 // SMTP username
        $mail->Password = 'ci798nj50';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 2525;
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom(Yii::$app->params['adminEmail']);
        $mail->Subject = $this->subject;
        $mail->isHTML(true);
        $mail->MsgHTML($this->text);
        $mail->AddAddress($this->email);
        $mail->send();

        if(!$mail->send()) {
            return 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return 'Message has been sent';
        }
    }
}

