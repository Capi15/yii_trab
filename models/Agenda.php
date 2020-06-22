<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property int $idAgenda
 * @property string|null $dataHoraPartida
 * @property string|null $dataHoraChegada
 *
 * @property Servico[] $servicos
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataHoraPartida', 'dataHoraChegada'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAgenda' => 'Id Agenda',
            'dataHoraPartida' => 'Data Hora Partida',
            'dataHoraChegada' => 'Data Hora Chegada',
        ];
    }

    /**
     * Gets query for [[Servicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(Servico::className(), ['idAgenda' => 'idAgenda']);
    }
}
