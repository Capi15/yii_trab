<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SRota;

/**
 * SRotaSearch represents the model behind the search form of `app\models\SRota`.
 */
class SRotaSearch extends SRota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idServico', 'idRota'], 'integer'],
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
        $query = SRota::find();

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
            'idServico' => $this->idServico,
            'idRota' => $this->idRota,
        ]);

        return $dataProvider;
    }
}
