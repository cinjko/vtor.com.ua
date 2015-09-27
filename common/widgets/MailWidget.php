<?php

namespace common\widgets;
require( __DIR__.'/../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
use yii\base\Widget;
use Yii;
use yii\helpers\Html;

class MailWidget extends Widget
{
    public $message;
    public $email;
    public $text;
    public $subject;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $mail = new \PHPMailer;
        $mail->IsSMTP();
        $mail->SMTPDebug = 2;
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom($mail->Username);
        $mail->Subject = $this->subject;
        $mail->isHTML(true);
        $mail->MsgHTML($this->text);
        $address = 'cinjko21@gmail.com';
        $mail->AddAddress($address);

        if(!$mail->send()) {
            return 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return 'Message has been sent';
        }
    }
}

