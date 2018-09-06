<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $idfaq
 * @property string $question
 * @property string $answer
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idfaq', 'question', 'answer'], 'required'],
            [['idfaq'], 'integer'],
            [['question', 'answer'], 'string'],
            [['idfaq'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfaq' => 'Idfaq',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }
}
