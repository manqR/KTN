<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "logo".
 *
 * @property int $idlogo
 * @property string $file_img
 * @property string $alt
 */
class Logo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idlogo'], 'required'],
            [['idlogo'], 'integer'],
            [['file_img', 'alt'], 'string', 'max' => 50],
            [['idlogo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idlogo' => 'Idlogo',
            'file_img' => 'File Img',
            'alt' => 'Alt',
        ];
    }
}
