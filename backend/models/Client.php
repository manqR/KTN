<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $idclient
 * @property string $nama_klien
 * @property string $file_img
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idclient'], 'required'],
            [['idclient'], 'integer'],
            [['nama_klien', 'file_img'], 'string', 'max' => 50],
            [['idclient'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idclient' => 'Idclient',
            'nama_klien' => 'Nama Klien',
            'file_img' => 'File Img',
        ];
    }
}
