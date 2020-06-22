<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rota".
 *
 * @property int $idRota
 * @property string|null $localSaida
 * @property string|null $localChegada
 *
 * @property Servicorota[] $servicorotas
 * @property Servico[] $idServicos
 */
class Rota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['localSaida', 'localChegada'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idRota' => 'Id Rota',
            'localSaida' => 'Local Saida',
            'localChegada' => 'Local Chegada',
        ];
    }

    /**
     * Gets query for [[Servicorotas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicorotas()
    {
        return $this->hasMany(Servicorota::className(), ['idRota' => 'idRota']);
    }

    /**
     * Gets query for [[IdServicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdServicos()
    {
        return $this->hasMany(Servico::className(), ['idServico' => 'idServico'])->viaTable('servicorota', ['idRota' => 'idRota']);
    }
}
