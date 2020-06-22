<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagamento".
 *
 * @property int $idPagamento
 * @property string|null $tipo
 * @property int|null $quantia
 * @property int $idCliente
 *
 * @property Users $idCliente0
 */
class Pagamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantia', 'idCliente'], 'integer'],
            [['idCliente'], 'required'],
            [['tipo'], 'string', 'max' => 10],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idCliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPagamento' => 'Id Pagamento',
            'tipo' => 'Tipo',
            'quantia' => 'Quantia',
            'idCliente' => 'Id Cliente',
        ];
    }

    /**
     * Gets query for [[IdCliente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente0()
    {
        return $this->hasOne(Users::className(), ['id' => 'idCliente']);
    }
}
