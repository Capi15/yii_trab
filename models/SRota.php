<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicorota".
 *
 * @property int $idServico
 * @property int $idRota
 *
 * @property Rota $idRota0
 * @property Servico $idServico0
 */
class SRota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicorota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idServico', 'idRota'], 'required'],
            [['idServico', 'idRota'], 'integer'],
            [['idServico', 'idRota'], 'unique', 'targetAttribute' => ['idServico', 'idRota']],
            [['idRota'], 'exist', 'skipOnError' => true, 'targetClass' => Rota::className(), 'targetAttribute' => ['idRota' => 'idRota']],
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
            'idRota' => 'Id Rota',
        ];
    }

    /**
     * Gets query for [[IdRota0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdRota0()
    {
        return $this->hasOne(Rota::className(), ['idRota' => 'idRota']);
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
