<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jajaran".
 *
 * @property int $id
 * @property string $img
 * @property string $nama
 * @property string $posisi
 * @property string $facebook
 * @property string $linkedin
 * @property string $twitter
 */
class Jajaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jajaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'nama', 'posisi'], 'required'],
            [['img', 'nama', 'posisi', 'facebook', 'linkedin', 'twitter'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'nama' => 'Nama',
            'posisi' => 'Posisi',
            'facebook' => 'Facebook',
            'linkedin' => 'Linkedin',
            'twitter' => 'Twitter',
        ];
    }
}
