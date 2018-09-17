<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "aboutus".
 *
 * @property int $idabout
 * @property string $full_description
 * @property string $short_description
 */
class Aboutus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aboutus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_description'], 'required'],
            [['full_description'], 'string'],
            [['short_description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idabout' => 'Idabout',
            'full_description' => 'Full Description',
            'short_description' => 'Short Description',
        ];
    }
}
