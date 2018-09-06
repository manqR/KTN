<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "karir".
 *
 * @property int $idkarir
 * @property string $title
 * @property string $descripition
 */
class Karir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descripition'], 'required'],
            [['descripition'], 'string'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idkarir' => 'Idkarir',
            'title' => 'Title',
            'descripition' => 'Descripition',
        ];
    }
}
