<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produk_kategori".
 *
 * @property int $idcategory
 * @property string $name
 * @property int $status
 */
class ProdukKategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produk_kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcategory' => 'Idcategory',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }
}
