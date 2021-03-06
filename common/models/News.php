<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $created_at
 * @property string $short
 * @property string $full
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dwe_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'short', 'full'], 'required'],
            ['created_at', 'filter', 'filter' => function ($value) {
                return strtotime($value);
            }],
            [['full'], 'string'],
            [['short'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Дата',
            'short' => 'Заголовок',
            'full' => 'Полный текст',
        ];
    }
}
