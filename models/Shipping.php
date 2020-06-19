<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "navio".
 *
 * @property int $idNavio
 * @property string|null $nome
 * @property int|null $pesoCarga
 * @property int|null $noContentores
 * @property int $idCais
 *
 * @property Cais $idCais0
 */
class Shipping extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'navio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pesoCarga', 'noContentores', 'idCais'], 'integer'],
            [['idCais'], 'required'],
            [['nome'], 'string', 'max' => 10],
            [['idCais'], 'exist', 'skipOnError' => true, 'targetClass' => Cais::className(), 'targetAttribute' => ['idCais' => 'idCais']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idNavio' => 'Id Navio',
            'nome' => 'Nome',
            'pesoCarga' => 'Peso Carga',
            'noContentores' => 'No Contentores',
            'idCais' => 'Id Cais',
        ];
    }

    /**
     * Gets query for [[IdCais0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCais0()
    {
        return $this->hasOne(Cais::className(), ['idCais' => 'idCais']);
    }
}
