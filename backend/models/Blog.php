<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $idblog
 * @property string $img_display
 * @property string $title
 * @property string $short_description
 * @property string $full_description
 * @property string $tanggal
 * @property string $author
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'full_description'], 'required'],
            [['full_description'], 'string'],
            [['tanggal'], 'safe'],
            [['img_display', 'title', 'author'], 'string', 'max' => 50],
            [['short_description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idblog' => 'Idblog',
            'img_display' => 'Img Display',
            'title' => 'Title',
            'short_description' => 'Short Description',
            'full_description' => 'Full Description',
            'tanggal' => 'Tanggal',
            'author' => 'Author',
        ];
    }
}
