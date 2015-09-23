<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_gallery".
 *
 * @property integer $id
 * @property string $image
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'file'],
            [['image'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
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
