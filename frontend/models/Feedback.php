<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

/**
 * This is the model class for table "tbl_feedback".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $phone
 * @property integer $massage
 * @property string $data_time
 */
class Feedback extends Model
{
    public $name;
    public $email;
    public $phone;
    public $massage;
    public $data_time;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone','massage'], 'required'],
            [['phone'], 'integer'],
            [['email'], 'email'],
            [['data_time'], 'safe'],
            [['name', 'email', 'massage'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'data_time' => 'Data Time',
        ];
    }

    public function contact($email)
    {
        $content = "<p>Data and time: " . $this->data_time . "</p><br/>";
        $content .= "<p>Email: " . $this->email . "</p><br/>";
        $content .= "<p>Name: " . $this->name. "</p><br/>";
        $content .= "<p>Phone: " . $this->phone . "</p><br/>";
        $content .= "<p>Massage: " . $this->massage . "</p><br/>";

        if ($this->validate()) {
            try {
                Yii::$app->mailer->compose('layouts/html', ['content' => $content])
                    ->setFrom($email)
                    ->setTo('cinjko21@gmail.com')
                    ->setSubject('Vtormet comment!')
                    ->send();
                return true;
//            Yii::$app->mailer->compose("layouts/html", ['content' => $content])
//                ->setTo($email)
//                ->setFrom([$this->email => $this->name])
////            ->setSubject($this->subject)
////            ->setTextBody($this->body)
//                ->send();
            } catch (Exeption $e) {
                echo "Помилка типу" . $e->getMessage();die;
            }
        } else {
            return false;
        }
    }
}
