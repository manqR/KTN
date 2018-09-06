<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $idslider
 * @property string $title1
 * @property string $title2
 * @property string $img_slider
 * @property string $alt
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img_slider'], 'required'],
            [['title1', 'title2'], 'string', 'max' => 100],
            [['img_slider', 'alt'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idslider' => 'Idslider',
            'title1' => 'Title1',
            'title2' => 'Title2',
            'img_slider' => 'Img Slider',
            'alt' => 'Alt',
        ];
    }
}
