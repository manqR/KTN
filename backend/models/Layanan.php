<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "layanan".
 *
 * @property int $idlayanan
 * @property string $img
 * @property string $title
 * @property string $short_desc
 * @property string $full_desc
 * @property int $status
 */
class Layanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'layanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_desc'], 'string'],
            [['status'], 'integer'],
            [['img', 'title'], 'string', 'max' => 50],
            [['short_desc'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idlayanan' => 'Idlayanan',
            'img' => 'Img',
            'title' => 'Title',
            'short_desc' => 'Short Desc',
            'full_desc' => 'Full Desc',
            'status' => 'Status',
        ];
    }
}
