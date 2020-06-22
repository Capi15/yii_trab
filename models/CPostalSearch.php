<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CPostal;

/**
 * CPostalSearch represents the model behind the search form of `app\models\CPostal`.
 */
class CPostalSearch extends CPostal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cPostal', 'localidade'], 'safe'],
            [['idUsers'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = CPostal::find();

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
            'idUsers' => $this->idUsers,
        ]);

        $query->andFilterWhere(['like', 'cPostal', $this->cPostal])
            ->andFilterWhere(['like', 'localidade', $this->localidade]);

        return $dataProvider;
    }
}
