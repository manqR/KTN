<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $idproduk
 * @property int $idkategori
 * @property string $title
 * @property string $image
 * @property string $description
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idkategori', 'title', 'description'], 'required'],
            [['idkategori'], 'integer'],
            [['description'], 'string'],
            [['title', 'image'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idproduk' => 'Idproduk',
            'idkategori' => 'Idkategori',
            'title' => 'Title',
            'image' => 'Image',
            'description' => 'Description',
        ];
    }

    public function getProdukKategori()
    {
        return $this->hasOne(ProdukKategori::className(), ['idcategory' => 'idkategori']);
    }
}
