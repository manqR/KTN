<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kontak;

/**
 * KontakSearch represents the model behind the search form of `backend\models\Kontak`.
 */
class KontakSearch extends Kontak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idkontak'], 'integer'],
            [['alamat', 'tlp', 'email', 'facebook', 'twitter', 'linkedin'], 'safe'],
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
        $query = Kontak::find();

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
            'idkontak' => $this->idkontak,
        ]);

        $query->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tlp', $this->tlp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'linkedin', $this->linkedin]);

        return $dataProvider;
    }
}
