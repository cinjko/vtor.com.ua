<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_benefits".
 *
 * @property integer $id
 * @property string $title
 * @property integer $title_number
 * @property string $text
 */
class Benefits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_benefits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title_number'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'title_number' => 'Title Number',
            'text' => 'Text',
        ];
    }
}
