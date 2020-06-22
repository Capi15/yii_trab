<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $idFuncionario
 * @property string|null $funcao
 * @property int|null $ordenado
 *
 * @property Servico[] $servicos
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordenado'], 'integer'],
            [['funcao'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idFuncionario' => 'Id Funcionario',
            'funcao' => 'Funcao',
            'ordenado' => 'Ordenado',
        ];
    }

    /**
     * Gets query for [[Servicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(Servico::className(), ['idFuncionario' => 'idFuncionario']);
    }
}
