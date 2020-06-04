<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto".
 *
 * @property int $idContacto
 * @property string|null $email
 * @property int|null $telefone
 * @property int $idCliente
 *
 * @property User $idCliente0
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacto';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['telefone', 'integer'],
            [['email'], 'string', 'max' => 30],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idCliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idContacto' => 'Id Contacto',
            'email' => 'Email',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * Gets query for [[IdCliente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente0()
    {
        return $this->hasOne(User::className(), ['id' => 'idCliente']);
    }

    public function setIdCliente($value)
    {
        $this->idCliente = $value;

    }
}
