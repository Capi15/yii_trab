<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "terminal".
 *
 * @property int $idTerminal
 * @property string|null $tipoTerminal
 * @property int $idCais
 *
 * @property Servico[] $servicos
 * @property Cais $idCais0
 */
class Terminal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'terminal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCais'], 'required'],
            [['idCais'], 'integer'],
            [['tipoTerminal'], 'string', 'max' => 10],
            [['idCais'], 'exist', 'skipOnError' => true, 'targetClass' => Cais::className(), 'targetAttribute' => ['idCais' => 'idCais']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTerminal' => 'Id Terminal',
            'tipoTerminal' => 'Tipo Terminal',
            'idCais' => 'Id Cais',
        ];
    }

    /**
     * Gets query for [[Servicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(Servico::className(), ['idTerminal' => 'idTerminal']);
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
