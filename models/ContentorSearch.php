<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contentor;

/**
 * ContentorSearch represents the model behind the search form of `app\models\Contentor`.
 */
class ContentorSearch extends Contentor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idContentor', 'peso', 'idServico'], 'integer'],
            [['cor'], 'safe'],
            [['tamanho'], 'number'],
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
        $query = Contentor::find();

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
            'idContentor' => $this->idContentor,
            'peso' => $this->peso,
            'tamanho' => $this->tamanho,
            'idServico' => $this->idServico,
        ]);

        $query->andFilterWhere(['like', 'cor', $this->cor]);

        return $dataProvider;
    }
}