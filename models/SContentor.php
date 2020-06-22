<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicocontentor".
 *
 * @property int $idServico
 * @property int $idContentor
 *
 * @property Contentor $idContentor0
 * @property Servico $idServico0
 */
class SContentor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicocontentor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idServico', 'idContentor'], 'required'],
            [['idServico', 'idContentor'], 'integer'],
            [['idServico', 'idContentor'], 'unique', 'targetAttribute' => ['idServico', 'idContentor']],
            [['idContentor'], 'exist', 'skipOnError' => true, 'targetClass' => Contentor::className(), 'targetAttribute' => ['idContentor' => 'idContentor']],
            [['idServico'], 'exist', 'skipOnError' => true, 'targetClass' => Servico::className(), 'targetAttribute' => ['idServico' => 'idServico']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idServico' => 'Id Servico',
            'idContentor' => 'Id Contentor',
        ];
    }

    /**
     * Gets query for [[IdContentor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdContentor0()
    {
        return $this->hasOne(Contentor::className(), ['idContentor' => 'idContentor']);
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
}
