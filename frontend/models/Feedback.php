<?php

namespace frontend\models;

use yii\base\Model;

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

    public function saveFeedbackForm($value)
    {
        if ($value){

        }
    }
}
