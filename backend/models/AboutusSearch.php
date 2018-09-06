<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Aboutus;

/**
 * AboutusSearch represents the model behind the search form of `backend\models\Aboutus`.
 */
class AboutusSearch extends Aboutus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idabout'], 'integer'],
            [['kategori', 'full_description', 'short_description'], 'safe'],
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
        $query = Aboutus::find();

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
            'idabout' => $this->idabout,
        ]);

        $query->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'full_description', $this->full_description])
            ->andFilterWhere(['like', 'short_description', $this->short_description]);

        return $dataProvider;
    }
}
