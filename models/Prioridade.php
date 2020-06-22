<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prioridade".
 *
 * @property int $idPrioridade
 * @property int|null $expressoNormal
 *
 * @property Servico[] $servicos
 */
class Prioridade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prioridade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['expressoNormal'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPrioridade' => 'Id Prioridade',
            'expressoNormal' => 'Expresso Normal',
        ];
    }

    /**
     * Gets query for [[Servicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(Servico::className(), ['idPrioridade' => 'idPrioridade']);
    }
}
