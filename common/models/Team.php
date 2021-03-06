<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_team".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $position
 * @property string $image
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'position'], 'required'],
            [['full_name', 'position', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'position' => 'Position',
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
