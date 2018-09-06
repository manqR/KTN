<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property int $idkontak
 * @property string $alamat
 * @property string $tlp
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedin
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat'], 'string', 'max' => 225],
            [['tlp'], 'string', 'max' => 14],
            [['email', 'facebook', 'twitter', 'linkedin'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idkontak' => 'Idkontak',
            'alamat' => 'Alamat',
            'tlp' => 'Tlp',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'linkedin' => 'Linkedin',
        ];
    }
}
