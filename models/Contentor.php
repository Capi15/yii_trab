<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contentor".
 *
 * @property int $idContentor
 * @property string|null $cor
 * @property int|null $peso
 * @property float|null $tamanho
 * @property int $idServico
 *
 * @property Servico $idServico0
 * @property Servicocontentor[] $servicocontentors
 * @property Servico[] $idServicos
 */
class Contentor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contentor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peso', 'idServico'], 'integer'],
            [['tamanho'], 'number'],
            [['idServico'], 'required'],
            [['cor'], 'string', 'max' => 10],
            [['idServico'], 'exist', 'skipOnError' => true, 'targetClass' => Servico::className(), 'targetAttribute' => ['idServico' => 'idServico']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idContentor' => 'Id Contentor',
            'cor' => 'Cor',
            'peso' => 'Peso',
            'tamanho' => 'Tamanho',
            'idServico' => 'Id Servico',
        ];
    }

    /**
     * Gets query for [[IdServico0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdServico0()
    {
        return $this->hasOne(Servico::className(), ['idServico' => 'idServico']);
    }

    /**
     * Gets query for [[Servicocontentors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicocontentors()
    {
        return $this->hasMany(Servicocontentor::className(), ['idContentor' => 'idContentor']);
    }

    /**
     * Gets query for [[IdServicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdServicos()
    {
        return $this->hasMany(Servico::className(), ['idServico' => 'idServico'])->viaTable('servicocontentor', ['idContentor' => 'idContentor']);
    }
}
