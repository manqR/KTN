<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Slider;

/**
 * SliderSearch represents the model behind the search form of `backend\models\Slider`.
 */
class SliderSearch extends Slider
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idslider'], 'integer'],
            [['title1', 'title2', 'img_slider', 'alt'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Slider::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idslider' => $this->idslider,
        ]);

        $query->andFilterWhere(['like', 'title1', $this->title1])
            ->andFilterWhere(['like', 'title2', $this->title2])
            ->andFilterWhere(['like', 'img_slider', $this->img_slider])
            ->andFilterWhere(['like', 'alt', $this->alt]);

        return $dataProvider;
    }
}
