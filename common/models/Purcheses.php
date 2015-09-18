<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_purcheses".
 *
 * @property integer $id
 * @property string $title_ua
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_ua
 * @property string $description_ru
 * @property string $description_en
 * @property string $image
 */
class Purcheses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_purcheses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_ua', 'title_ru', 'title_en'], 'required'],
            [['description_ua', 'description_ru', 'description_en'], 'string'],
            [['title_ua', 'title_ru', 'title_en', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ua' => 'Title Ua',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'description_ua' => 'Description Ua',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'image' => 'Image',
        ];
    }
}
