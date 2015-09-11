<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_comments".
 *
 * @property integer $id
 * @property string $title
 * @property string $comments
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['comments'], 'string'],
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
            'comments' => 'Comments',
        ];
    }
}
