<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "icon".
 *
 * @property int $idicon
 * @property string $icon
 */
class Icon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'icon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idicon' => 'Idicon',
            'icon' => 'Icon',
        ];
    }
}
