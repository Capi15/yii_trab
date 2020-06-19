<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $username
 * @property int $NIF
 * @property string $auth_key
 * @property string $access_token
 * @property string $password
 *
 * @property Contacto[] $contactos
 * @property Cpostal[] $cpostals
 * @property Pagamento[] $pagamentos
 * @property Servico[] $servicos
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIF', 'auth_key', 'access_token', 'password'], 'required'],
            [['NIF'], 'integer'],
            [['username'], 'string', 'max' => 30],
            [['auth_key', 'access_token', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'NIF' => 'Nif',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'password' => 'Password',
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }


    /**
     * Gets query for [[Contactos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContactos()
    {
        return $this->hasMany(Contacto::className(), ['idCliente' => 'id']);
    }

    /**
     * Gets query for [[Cpostals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCpostals()
    {
        return $this->hasMany(Cpostal::className(), ['idUsers' => 'id']);
    }

    /**
     * Gets query for [[Pagamentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPagamentos()
    {
        return $this->hasMany(Pagamento::className(), ['idCliente' => 'id']);
    }

    /**
     * Gets query for [[Servicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(Servico::className(), ['idCliente' => 'id']);
    }
}
