<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_feedback".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $phone
 * @property string $data_time
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['phone'], 'integer'],
            [['data_time'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255]
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
}
