<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dwe_document".
 *
 * @property integer $id
 * @property integer $created_at
 * @property string $filename
 * @property string $title
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dwe_document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'filename', 'title'], 'required'],
            [['created_at'], 'integer'],
            [['title'], 'string'],
            [['filename'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'filename' => 'Filename',
            'title' => 'Title',
        ];
    }
}
