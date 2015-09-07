<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_about".
 *
 * @property integer $id
 * @property string $title
 * @property string $text_ua
 * @property string $text_en
 * @property string $text_ru
 * @property string $image
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text_ua', 'text_en', 'text_ru'], 'string'],
            [['title', 'image'], 'string', 'max' => 255]
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
            'text_ua' => 'Text Ua',
            'text_en' => 'Text En',
            'text_ru' => 'Text Ru',
            'image' => 'Image',
        ];
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],
        ];
    }
}
